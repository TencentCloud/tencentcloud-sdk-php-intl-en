<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Baseline affected servers list data
 *
 * @method array getEventLevelList() Obtain List of event levels and occurrences
 * @method void setEventLevelList(array $EventLevelList) Set List of event levels and occurrences
 * @method string getHostName() Obtain Host name
 * @method void setHostName(string $HostName) Set Host name
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method integer getScore() Obtain Score for calculating weight
 * @method void setScore(integer $Score) Set Score for calculating weight
 */
class BaselineHostTopList extends AbstractModel
{
    /**
     * @var array List of event levels and occurrences
     */
    public $EventLevelList;

    /**
     * @var string Host name
     */
    public $HostName;

    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var integer Score for calculating weight
     */
    public $Score;

    /**
     * @param array $EventLevelList List of event levels and occurrences
     * @param string $HostName Host name
     * @param string $Quuid Host QUUID
     * @param integer $Score Score for calculating weight
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
        if (array_key_exists("EventLevelList",$param) and $param["EventLevelList"] !== null) {
            $this->EventLevelList = [];
            foreach ($param["EventLevelList"] as $key => $value){
                $obj = new BaselineEventLevelInfo();
                $obj->deserialize($value);
                array_push($this->EventLevelList, $obj);
            }
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}
