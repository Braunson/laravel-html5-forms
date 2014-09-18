<?php namespace Braunson\LaravelHTML5Forms;

class FormBuilder extends \Illuminate\Html\FormBuilder {
    
    /**
     * Create a form color field.
     *
     * @param  string  $name
     * @param  string  $value
     * @param  array   $options
     * @return string
     */
    public function color($name, $value = null, $options = array())
    {
		return $this->input('color', $name, $value, $options);
    }    
    
    /**
     * Create a form date field.
     *
     * @param  string  $name
     * @param  date    $min
     * @param  date    $max
     * @param  array   $options
     * @return string
     */
    public function date($name, $min = null, $max = null, $options = array())
    {
        if( !isset($min) && !isset($max) ) return 'The date field "'.$name.'" must have a min, max or both.';
        
        if( isset($min) ) $options['min'] = $min;
        if( isset($max) ) $options['max'] = $max;
        
		return $this->input('date', $name, null, $options);
    }
    
    /**
     * Create a form time field.
     *
     * @param  string  $name
     * @param  array   $options
     * @return string
     */
    public function time($name, $options = array())
    {        
		return $this->input('time', $name, null, $options);
    }
    
    /**
     * Create a form datetime field.
     *
     * @param  string  $name
     * @param  array   $options
     * @return string
     */
    public function datetime($name, $options = array())
    {        
		return $this->input('datetime', $name, null, $options);
    }
    
    /**
     * Create a form datetime-local field.
     *
     * @param  string  $name
     * @param  array   $options
     * @return string
     */
    public function datetime_local($name, $options = array())
    {        
		return $this->input('datetime-local', $name, null, $options);
    }
    
    /**
     * Create a form email field.
     *
     * @param  string  $name
     * @param  string  $value
     * @param  array   $options
     * @return string
     */
    public function email($name, $value = null, $options = array())
    {        
		return $this->input('email', $name, $value, $options);
    }
    
    /**
     * Create a form week field.
     *
     * @param  string  $name
     * @param  string  $value
     * @param  array   $options
     * @return string
     */
    public function week($name, $value = null, $options = array())
    {        
		return $this->input('week', $name, $value, $options);
    }
    
    /**
     * Create a form month field.
     *
     * @param  string  $name
     * @param  string  $value
     * @param  array   $options
     * @return string
     */
    public function month($name, $value = null, $options = array())
    {        
		return $this->input('month', $name, $value, $options);
    }
    
    /**
     * Create a form number field.
     *
     * @param  string  $name
     * @param  string  $value
     * @param  int     $step
     * @param  array   $options
     * @return string
     */
    public function number($name, $value = null, $step = null, $options = array())
    {
		if( isset($step) ) $options['step'] = $step;
        
		$options = $this->setNumberMinMax($options);

		return $this->input('number', $name, $value, $options);
    }
    
    /**
     * Create a form range field.
     *
     * @param  string  $name
     * @param  string  $value
     * @param  array   $options
     * @return string
     */
    public function range($name, $value = null, $options = array())
    {
		$options = $this->setNumberMinMax($options);
  
		return $this->input('range', $name, $value, $options);
    }
    
    /**
     * Create a form search field.
     *
     * @param  string  $name
     * @param  string  $value
     * @param  array   $options
     * @return string
     */
    public function search($name, $value = null, $options = array())
    {
		return $this->input('search', $name, $value, $options);
    } 
    
    /**
     * Create a form tel field.
     *
     * @param  string  $name
     * @param  string  $value
     * @param  array   $options
     * @return string
     */
    public function tel($name, $value = null, $options = array())
    {
		return $this->input('tel', $name, $value, $options);
    }
    
    /**
     * Create a form url field.
     *
     * @param  string  $name
     * @param  string  $value
     * @param  array   $options
     * @return string
     */
    public function url($name, $value = null, $options = array())
    {
		return $this->input('url', $name, $value, $options);
    } 
    
    /**
	 * Set the number min max on the attributes.
	 *
	 * @param  array  $options
	 * @return array
	 */
	protected function setNumberMinMax($options)
	{
		if (isset($options['minmax']))
		{
            // If "minmax" is false, then don't set any min/max and remove it from the options array
            if ( $options['minmax'] == false){
                unset($options['minmax']);
                
                return $options;
            }
            
			return $this->setQuickNumberMinMax($options);
		}

		// If the "minmax" attribute was not specified, we will just look for the regular
		// min and max attributes, using sane defaults if these do not exist on
		// the attributes array. We'll then return this entire options array back.
		$min = array_get($options, 'min', 0);
		$max = array_get($options, 'max', 10);

		return array_merge($options, compact('min', 'max'));
	}

	/**
	 * Set the number minmax using the quick "minmax" attribute.
	 *
	 * @param  array  $options
	 * @return array
	 */
	protected function setQuickNumberMinMax($options)
	{
		$segments = explode('|', $options['minmax']);
        
		return array_merge($options, array('min' => $segments[0], 'max' => $segments[1]));
	}
    
}