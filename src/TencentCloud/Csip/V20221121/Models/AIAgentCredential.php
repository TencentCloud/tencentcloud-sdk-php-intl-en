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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AIAgent asset credential details
 *
 * @method integer getID() Obtain <p>Credential ID</p>
 * @method void setID(integer $ID) Set <p>Credential ID</p>
 * @method string getCredName() Obtain <p>Credential name</p>
 * @method void setCredName(string $CredName) Set <p>Credential name</p>
 * @method string getCredType() Obtain <p>Credential type</p><p>Enumeration values:</p><ul><li>OAUTH: OAUTH credential</li><li>API_TOKEN: TOKEN credential</li><li>CLOUD_AK: AK/SK credential</li></ul>
 * @method void setCredType(string $CredType) Set <p>Credential type</p><p>Enumeration values:</p><ul><li>OAUTH: OAUTH credential</li><li>API_TOKEN: TOKEN credential</li><li>CLOUD_AK: AK/SK credential</li></ul>
 * @method array getLocations() Obtain <p>Credential location identification</p>
 * @method void setLocations(array $Locations) Set <p>Credential location identification</p>
 * @method string getDetectTime() Obtain <p>Latest scan discovery time</p>
 * @method void setDetectTime(string $DetectTime) Set <p>Latest scan discovery time</p>
 * @method integer getHitCount() Obtain <p>Total count of leakage locations of this credential</p>
 * @method void setHitCount(integer $HitCount) Set <p>Total count of leakage locations of this credential</p>
 */
class AIAgentCredential extends AbstractModel
{
    /**
     * @var integer <p>Credential ID</p>
     */
    public $ID;

    /**
     * @var string <p>Credential name</p>
     */
    public $CredName;

    /**
     * @var string <p>Credential type</p><p>Enumeration values:</p><ul><li>OAUTH: OAUTH credential</li><li>API_TOKEN: TOKEN credential</li><li>CLOUD_AK: AK/SK credential</li></ul>
     */
    public $CredType;

    /**
     * @var array <p>Credential location identification</p>
     */
    public $Locations;

    /**
     * @var string <p>Latest scan discovery time</p>
     */
    public $DetectTime;

    /**
     * @var integer <p>Total count of leakage locations of this credential</p>
     */
    public $HitCount;

    /**
     * @param integer $ID <p>Credential ID</p>
     * @param string $CredName <p>Credential name</p>
     * @param string $CredType <p>Credential type</p><p>Enumeration values:</p><ul><li>OAUTH: OAUTH credential</li><li>API_TOKEN: TOKEN credential</li><li>CLOUD_AK: AK/SK credential</li></ul>
     * @param array $Locations <p>Credential location identification</p>
     * @param string $DetectTime <p>Latest scan discovery time</p>
     * @param integer $HitCount <p>Total count of leakage locations of this credential</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("CredName",$param) and $param["CredName"] !== null) {
            $this->CredName = $param["CredName"];
        }

        if (array_key_exists("CredType",$param) and $param["CredType"] !== null) {
            $this->CredType = $param["CredType"];
        }

        if (array_key_exists("Locations",$param) and $param["Locations"] !== null) {
            $this->Locations = [];
            foreach ($param["Locations"] as $key => $value){
                $obj = new AIAgentCredentialLocation();
                $obj->deserialize($value);
                array_push($this->Locations, $obj);
            }
        }

        if (array_key_exists("DetectTime",$param) and $param["DetectTime"] !== null) {
            $this->DetectTime = $param["DetectTime"];
        }

        if (array_key_exists("HitCount",$param) and $param["HitCount"] !== null) {
            $this->HitCount = $param["HitCount"];
        }
    }
}
