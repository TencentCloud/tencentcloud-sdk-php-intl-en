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
 * Top 5 server risk entities
 *
 * @method string getHostName() Obtain host name
 * @method void setHostName(string $HostName) Set host name
 * @method array getVulLevelList() Obtain Vulnerability level and quantity statistics list
 * @method void setVulLevelList(array $VulLevelList) Set Vulnerability level and quantity statistics list
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method integer getScore() Obtain top rating
 * @method void setScore(integer $Score) Set top rating
 */
class VulHostTopInfo extends AbstractModel
{
    /**
     * @var string host name
     */
    public $HostName;

    /**
     * @var array Vulnerability level and quantity statistics list
     */
    public $VulLevelList;

    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var integer top rating
     */
    public $Score;

    /**
     * @param string $HostName host name
     * @param array $VulLevelList Vulnerability level and quantity statistics list
     * @param string $Quuid Host QUUID
     * @param integer $Score top rating
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
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("VulLevelList",$param) and $param["VulLevelList"] !== null) {
            $this->VulLevelList = [];
            foreach ($param["VulLevelList"] as $key => $value){
                $obj = new VulLevelCountInfo();
                $obj->deserialize($value);
                array_push($this->VulLevelList, $obj);
            }
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}
