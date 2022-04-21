<?php

class UnholyFactory
{
	private $fighterCollection = array();
	
	public function absorb($absorbThisFighter)
	{
		if (is_subclass_of($absorbThisFighter, "Fighter"))
		{
			if (in_array($absorbThisFighter, $this->fighterCollection))
				printf("(Factory already absorbed a fighter of type %s)" . PHP_EOL, $absorbThisFighter->createdFighter);
			else
			{
				$this->fighterCollection[$absorbThisFighter->createdFighter] = $absorbThisFighter;
				printf("(Factory absorbed a fighter of type %s)" . PHP_EOL, $absorbThisFighter->createdFighter);
			}
		}
		else
			printf("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
	}
	
	public function fabricate($fabricateThisFighter)
	{
		$check_to_fabricate = 0;

		foreach ($this->fighterCollection as $key=>$value)
		{
			if ($fabricateThisFighter == $key)
				$check_to_fabricate = 1;
		}

		if ($check_to_fabricate)
		{
			printf("(Factory fabricates a fighter of type %s)" . PHP_EOL, $fabricateThisFighter);
			return ($this->fighterCollection[$fabricateThisFighter]);
		}
		else
			printf("(Factory hasn't absorbed any fighter of type %s)" . PHP_EOL, $fabricateThisFighter);
	}

}

?>