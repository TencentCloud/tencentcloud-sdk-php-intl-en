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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Top 5 server risk entities
 *
 * @method string getHostName() Obtain Host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostName(string $HostName) Set Host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getVulLevelList() Obtain Vulnerability level and quantity statistics list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulLevelList(array $VulLevelList) Set Vulnerability level and quantity statistics list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQuuid() Obtain Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQuuid(string $Quuid) Set Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScore() Obtain Top ratings
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScore(integer $Score) Set Top ratings
Note: This field may return null, indicating that no valid values can be obtained.
 */
class VulHostTopInfo extends AbstractModel
{
    /**
     * @var string Host name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostName;

    /**
     * @var array Vulnerability level and quantity statistics list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulLevelList;

    /**
     * @var string Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Quuid;

    /**
     * @var integer Top ratings
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Score;

    /**
     * @param string $HostName Host name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $VulLevelList Vulnerability level and quantity statistics list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Quuid Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Score Top ratings
Note: This field may return null, indicating that no valid values can be obtained.
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
