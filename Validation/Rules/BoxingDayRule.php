<?php
/**
 * @category    hpc-server
 * @package     EcclesiasticalYear_Validation
 * @copyright   Copyright (c) HPC
 * @author      Stephan Suess
 */

namespace Hpc\Component\EcclesiasticalYear\Validation\Rules;


class BoxingDayRule extends AbstractRules implements InterfaceRules
{
    /**
     * @param string $input
     *
     * @return bool
     */
    public function checkDate($input)
    {
        $this->inputValue = $input;
        $this->setName();
        return ($this->inputValue == ($this->dateChristmasEve + (2 * self::SECONDS_PER_DAY)));
    }

    /**
     * @return string
     */
    public function getFormatedDate()
    {
        return $this->formatDate();
    }

    /**
     * Setteer for date name
     */
    protected function setName()
    {
        $this->DateName = '2. Weihnachtsfeiertag';
    }
}