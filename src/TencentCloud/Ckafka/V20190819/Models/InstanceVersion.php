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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance version information.
 *
 * @method string getKafkaVersion() Obtain CKafka cluster instance version.
 * @method void setKafkaVersion(string $KafkaVersion) Set CKafka cluster instance version.
 * @method string getCurBrokerVersion() Obtain Broker version information.
 * @method void setCurBrokerVersion(string $CurBrokerVersion) Set Broker version information.
 * @method array getLatestBrokerVersion() Obtain Latest version information.
 * @method void setLatestBrokerVersion(array $LatestBrokerVersion) Set Latest version information.
 * @method boolean getAllowUpgradeHighVersion() Obtain Whether to allow kernel upgrades across major versions.
 * @method void setAllowUpgradeHighVersion(boolean $AllowUpgradeHighVersion) Set Whether to allow kernel upgrades across major versions.
 * @method array getHighVersionSet() Obtain Major version allowed for upgrades.
 * @method void setHighVersionSet(array $HighVersionSet) Set Major version allowed for upgrades.
 * @method boolean getAllowAutoDeleteTimestamp() Obtain Whether to allow automatic deletion of consumer groups during minor version configuration.
 * @method void setAllowAutoDeleteTimestamp(boolean $AllowAutoDeleteTimestamp) Set Whether to allow automatic deletion of consumer groups during minor version configuration.
 */
class InstanceVersion extends AbstractModel
{
    /**
     * @var string CKafka cluster instance version.
     */
    public $KafkaVersion;

    /**
     * @var string Broker version information.
     */
    public $CurBrokerVersion;

    /**
     * @var array Latest version information.
     */
    public $LatestBrokerVersion;

    /**
     * @var boolean Whether to allow kernel upgrades across major versions.
     */
    public $AllowUpgradeHighVersion;

    /**
     * @var array Major version allowed for upgrades.
     */
    public $HighVersionSet;

    /**
     * @var boolean Whether to allow automatic deletion of consumer groups during minor version configuration.
     */
    public $AllowAutoDeleteTimestamp;

    /**
     * @param string $KafkaVersion CKafka cluster instance version.
     * @param string $CurBrokerVersion Broker version information.
     * @param array $LatestBrokerVersion Latest version information.
     * @param boolean $AllowUpgradeHighVersion Whether to allow kernel upgrades across major versions.
     * @param array $HighVersionSet Major version allowed for upgrades.
     * @param boolean $AllowAutoDeleteTimestamp Whether to allow automatic deletion of consumer groups during minor version configuration.
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
        if (array_key_exists("KafkaVersion",$param) and $param["KafkaVersion"] !== null) {
            $this->KafkaVersion = $param["KafkaVersion"];
        }

        if (array_key_exists("CurBrokerVersion",$param) and $param["CurBrokerVersion"] !== null) {
            $this->CurBrokerVersion = $param["CurBrokerVersion"];
        }

        if (array_key_exists("LatestBrokerVersion",$param) and $param["LatestBrokerVersion"] !== null) {
            $this->LatestBrokerVersion = [];
            foreach ($param["LatestBrokerVersion"] as $key => $value){
                $obj = new LatestBrokerVersion();
                $obj->deserialize($value);
                array_push($this->LatestBrokerVersion, $obj);
            }
        }

        if (array_key_exists("AllowUpgradeHighVersion",$param) and $param["AllowUpgradeHighVersion"] !== null) {
            $this->AllowUpgradeHighVersion = $param["AllowUpgradeHighVersion"];
        }

        if (array_key_exists("HighVersionSet",$param) and $param["HighVersionSet"] !== null) {
            $this->HighVersionSet = $param["HighVersionSet"];
        }

        if (array_key_exists("AllowAutoDeleteTimestamp",$param) and $param["AllowAutoDeleteTimestamp"] !== null) {
            $this->AllowAutoDeleteTimestamp = $param["AllowAutoDeleteTimestamp"];
        }
    }
}
