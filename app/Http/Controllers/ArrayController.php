<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ArrayController extends Controller
{
    /**
     * Array for manage.
     * @var array
     */
    public $array;

    public function __construct()
    {
        $this->array = Array(
            rand(1, 99),
            rand(1, 99),
            rand(1, 99),
            rand(1, 99),
            rand(1, 99),
            rand(1, 99),
            rand(1, 99),
        );
    }

    /**
     * Display a test page.
     * @return View
     */
    public function index(): View
    {
        $thirdPosition = $this->array[2];
        $stringArr = implode(",", $this->array);

        $newArr = $this->regenerateArray($this->array);

        $fourteenExists = in_array('14', $newArr) ? true : false;

        $reducedArr = $this->reduceArray($newArr);

        $arrayWithoutLastIndex = $this->deleteLastIndex($reducedArr);

        $arrayLength = count($arrayWithoutLastIndex);

        $arrayReverse = array_reverse($arrayWithoutLastIndex);

        return view('test_two.index')
            ->with('arr', $this->array ?? [])
            ->with('string', $stringArr)
            ->with('newArr', $newArr)
            ->with('fourteenExists', $fourteenExists)
            ->with('reducedArr', $reducedArr)
            ->with('arrayWithoutLastIndex', $arrayWithoutLastIndex)
            ->with('arrayLength', $arrayLength)
            ->with('arrayReverse', $arrayReverse)
            ->with('thirdPosition', $thirdPosition);
    }

    /**
     * Delete the array and create it again.
     * @param array $array Array to be regenerated.
     * @return array
     */
    public function regenerateArray($arr): Array
    {
        $array = $arr;
        $string = implode(",", $array);

        unset($array);

        $newArr = explode(",", $string);

        return $newArr;
    }

    /**
     * Reduce array comparing indexes.
     * @param array $array
     * @return array
     */
    public function reduceArray($arr): Array
    {
        $arrayLength = count($arr) - 1;
        $reducedArray = $arr;
        $lastMaxValue = $arr[0];

        $this->compare($reducedArray, 0, $arrayLength, $lastMaxValue);

        return $reducedArray;
    }

    /**
     * Compare indexes and reduce array.
     * @param array $array Array to be compared and reduced.
     * @param int $index Index to be compared.
     * @param int $arrayLength Length of array.
     * @param int $lastMaxValue Last max value.
     * @return array
     */
    public function compare(&$reducedArray, $index, $arrayLength, $lastMaxValue)
    {
        if($index > $arrayLength) {
            return;
        }

        if($index > 0 && $reducedArray[$index] < $lastMaxValue) {
            unset($reducedArray[$index]);
        } else {
            $lastMaxValue = $reducedArray[$index];
        }

        return $this->compare($reducedArray, $index + 1, $arrayLength, $lastMaxValue);
    }

    /**
     * Delete the last index of the array.
     * @param array $array
     * @return array
     */
    public function deleteLastIndex($arr): Array
    {
        $array = $arr;
        array_pop($array);
        return $array;
    }

}
