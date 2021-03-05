<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application statistics
 *
 * @method integer getBizId() Obtain Application ID
 * @method void setBizId(integer $BizId) Set Application ID
 * @method integer getDauDataNum() Obtain DAU data
 * @method void setDauDataNum(integer $DauDataNum) Set DAU data
 * @method array getDauDataMainland() Obtain DAU in Chinese mainland
 * @method void setDauDataMainland(array $DauDataMainland) Set DAU in Chinese mainland
 * @method array getDauDataOversea() Obtain DAU outside Chinese mainland
 * @method void setDauDataOversea(array $DauDataOversea) Set DAU outside Chinese mainland
 * @method array getDauDataSum() Obtain Total DAU
 * @method void setDauDataSum(array $DauDataSum) Set Total DAU
 * @method integer getDurationDataNum() Obtain Number of voice chat metrics
 * @method void setDurationDataNum(integer $DurationDataNum) Set Number of voice chat metrics
 * @method array getDurationDataMainland() Obtain Duration of voice chat in Chinese mainland in minutes
 * @method void setDurationDataMainland(array $DurationDataMainland) Set Duration of voice chat in Chinese mainland in minutes
 * @method array getDurationDataOversea() Obtain Duration of voice chat outside Chinese mainland in minutes
 * @method void setDurationDataOversea(array $DurationDataOversea) Set Duration of voice chat outside Chinese mainland in minutes
 * @method array getDurationDataSum() Obtain Total duration of voice chat in minutes
 * @method void setDurationDataSum(array $DurationDataSum) Set Total duration of voice chat in minutes
 * @method integer getPcuDataNum() Obtain PCU data
 * @method void setPcuDataNum(integer $PcuDataNum) Set PCU data
 * @method array getPcuDataMainland() Obtain PCU in Chinese mainland
 * @method void setPcuDataMainland(array $PcuDataMainland) Set PCU in Chinese mainland
 * @method array getPcuDataOversea() Obtain PCU outside Chinese mainland
 * @method void setPcuDataOversea(array $PcuDataOversea) Set PCU outside Chinese mainland
 * @method array getPcuDataSum() Obtain Total PCU
 * @method void setPcuDataSum(array $PcuDataSum) Set Total PCU
 */
class ApplicationDataStatistics extends AbstractModel
{
    /**
     * @var integer Application ID
     */
    public $BizId;

    /**
     * @var integer DAU data
     */
    public $DauDataNum;

    /**
     * @var array DAU in Chinese mainland
     */
    public $DauDataMainland;

    /**
     * @var array DAU outside Chinese mainland
     */
    public $DauDataOversea;

    /**
     * @var array Total DAU
     */
    public $DauDataSum;

    /**
     * @var integer Number of voice chat metrics
     */
    public $DurationDataNum;

    /**
     * @var array Duration of voice chat in Chinese mainland in minutes
     */
    public $DurationDataMainland;

    /**
     * @var array Duration of voice chat outside Chinese mainland in minutes
     */
    public $DurationDataOversea;

    /**
     * @var array Total duration of voice chat in minutes
     */
    public $DurationDataSum;

    /**
     * @var integer PCU data
     */
    public $PcuDataNum;

    /**
     * @var array PCU in Chinese mainland
     */
    public $PcuDataMainland;

    /**
     * @var array PCU outside Chinese mainland
     */
    public $PcuDataOversea;

    /**
     * @var array Total PCU
     */
    public $PcuDataSum;

    /**
     * @param integer $BizId Application ID
     * @param integer $DauDataNum DAU data
     * @param array $DauDataMainland DAU in Chinese mainland
     * @param array $DauDataOversea DAU outside Chinese mainland
     * @param array $DauDataSum Total DAU
     * @param integer $DurationDataNum Number of voice chat metrics
     * @param array $DurationDataMainland Duration of voice chat in Chinese mainland in minutes
     * @param array $DurationDataOversea Duration of voice chat outside Chinese mainland in minutes
     * @param array $DurationDataSum Total duration of voice chat in minutes
     * @param integer $PcuDataNum PCU data
     * @param array $PcuDataMainland PCU in Chinese mainland
     * @param array $PcuDataOversea PCU outside Chinese mainland
     * @param array $PcuDataSum Total PCU
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("DauDataNum",$param) and $param["DauDataNum"] !== null) {
            $this->DauDataNum = $param["DauDataNum"];
        }

        if (array_key_exists("DauDataMainland",$param) and $param["DauDataMainland"] !== null) {
            $this->DauDataMainland = [];
            foreach ($param["DauDataMainland"] as $key => $value){
                $obj = new StatisticsItem();
                $obj->deserialize($value);
                array_push($this->DauDataMainland, $obj);
            }
        }

        if (array_key_exists("DauDataOversea",$param) and $param["DauDataOversea"] !== null) {
            $this->DauDataOversea = [];
            foreach ($param["DauDataOversea"] as $key => $value){
                $obj = new StatisticsItem();
                $obj->deserialize($value);
                array_push($this->DauDataOversea, $obj);
            }
        }

        if (array_key_exists("DauDataSum",$param) and $param["DauDataSum"] !== null) {
            $this->DauDataSum = [];
            foreach ($param["DauDataSum"] as $key => $value){
                $obj = new StatisticsItem();
                $obj->deserialize($value);
                array_push($this->DauDataSum, $obj);
            }
        }

        if (array_key_exists("DurationDataNum",$param) and $param["DurationDataNum"] !== null) {
            $this->DurationDataNum = $param["DurationDataNum"];
        }

        if (array_key_exists("DurationDataMainland",$param) and $param["DurationDataMainland"] !== null) {
            $this->DurationDataMainland = [];
            foreach ($param["DurationDataMainland"] as $key => $value){
                $obj = new StatisticsItem();
                $obj->deserialize($value);
                array_push($this->DurationDataMainland, $obj);
            }
        }

        if (array_key_exists("DurationDataOversea",$param) and $param["DurationDataOversea"] !== null) {
            $this->DurationDataOversea = [];
            foreach ($param["DurationDataOversea"] as $key => $value){
                $obj = new StatisticsItem();
                $obj->deserialize($value);
                array_push($this->DurationDataOversea, $obj);
            }
        }

        if (array_key_exists("DurationDataSum",$param) and $param["DurationDataSum"] !== null) {
            $this->DurationDataSum = [];
            foreach ($param["DurationDataSum"] as $key => $value){
                $obj = new StatisticsItem();
                $obj->deserialize($value);
                array_push($this->DurationDataSum, $obj);
            }
        }

        if (array_key_exists("PcuDataNum",$param) and $param["PcuDataNum"] !== null) {
            $this->PcuDataNum = $param["PcuDataNum"];
        }

        if (array_key_exists("PcuDataMainland",$param) and $param["PcuDataMainland"] !== null) {
            $this->PcuDataMainland = [];
            foreach ($param["PcuDataMainland"] as $key => $value){
                $obj = new StatisticsItem();
                $obj->deserialize($value);
                array_push($this->PcuDataMainland, $obj);
            }
        }

        if (array_key_exists("PcuDataOversea",$param) and $param["PcuDataOversea"] !== null) {
            $this->PcuDataOversea = [];
            foreach ($param["PcuDataOversea"] as $key => $value){
                $obj = new StatisticsItem();
                $obj->deserialize($value);
                array_push($this->PcuDataOversea, $obj);
            }
        }

        if (array_key_exists("PcuDataSum",$param) and $param["PcuDataSum"] !== null) {
            $this->PcuDataSum = [];
            foreach ($param["PcuDataSum"] as $key => $value){
                $obj = new StatisticsItem();
                $obj->deserialize($value);
                array_push($this->PcuDataSum, $obj);
            }
        }
    }
}
