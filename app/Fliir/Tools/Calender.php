<?php

namespace App\Fliir\Tools;

/**
 * Calender variables
 */
class Calendar {

    /**
     * @return array
     */
    public function getMonths()
    {
        $months = [
            "Jan" => "January",
            "Feb" => "February",
            "Mar" => "March",
            "Apr" => "Apil",
            "May" => "May",
            "Jun" => "June",
            "Jul" => "July",
            "Aug" => "August",
            "Sep" => "September",
            "Oct" => "October",
            "Nov" => "November",
            "Dec" => "December"
        ];

        return $months;
    }

    /**
     * @return array
     */
    public function getDaysNumbers()
    {
        $numDays = [
            "1" => "1",
            "2" => "2",
            "3" => "3",
            "4" => "4",
            "5" => "5",
            "6" => "6",
            "7" => "7",
            "8" => "8",
            "9" => "9",
            "10" => "10",
            "11" => "11",
            "12" => "12",
            "13" => "13",
            "14" => "14",
            "15" => "15",
            "16" => "16",
            "17" => "17",
            "18" => "18",
            "19" => "19",
            "20" => "20",
            "21" => "21",
            "22" => "22",
            "23" => "23",
            "24" => "24",
            "25" => "25",
            "26" => "26",
            "27" => "27",
            "28" => "28",
            "29" => "29",
            "30" => "30",
            "31" => "31"
        ];

        return $numDays;
    }

    /**
     * @return array
     */
    public function getDaysOfTheWeek()
    {
        $daysOfWeek = [
            "Mon" => "Monday",
            "Tue" => "Tuesday",
            "Wed" => "Wednesday",
            "Thu" => "Thursday",
            "Fri" => "Friday",
            "Sat" => "Saturday",
            "Sun" => "Sunday"
        ];

        return $daysOfWeek;
    }

    /**
     * @return array
     */
    public function getCalendarArrays()
    {
        $data = array();

        $data['months'] = $this->getMonths();
        $data['numberDays'] = $this->getDaysNumbers();
        $data['daysOfTheWeek'] = $this->getDaysOfTheWeek();

        return $data;
    }
}