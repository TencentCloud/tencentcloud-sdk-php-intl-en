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
 * @method string getKafkaVersion() Obtain <p>ckafka cluster instance version</p>
 * @method void setKafkaVersion(string $KafkaVersion) Set <p>ckafka cluster instance version</p>
 * @method string getCurBrokerVersion() Obtain <p>broker version info</p>
 * @method void setCurBrokerVersion(string $CurBrokerVersion) Set <p>broker version info</p>
 * @method array getLatestBrokerVersion() Obtain <p>latest version info</p>
 * @method void setLatestBrokerVersion(array $LatestBrokerVersion) Set <p>latest version info</p>
 * @method boolean getAllowUpgradeHighVersion() Obtain <p>Permission for cross-major version kernel upgrade</p>
 * @method void setAllowUpgradeHighVersion(boolean $AllowUpgradeHighVersion) Set <p>Permission for cross-major version kernel upgrade</p>
 * @method array getHighVersionSet() Obtain <p>Permission for major version upgrade</p>
 * @method void setHighVersionSet(array $HighVersionSet) Set <p>Permission for major version upgrade</p>
 * @method boolean getAllowAutoDeleteTimestamp() Obtain <p>Permission to configure auto deletion of consumer group for minor version number</p>
 * @method void setAllowAutoDeleteTimestamp(boolean $AllowAutoDeleteTimestamp) Set <p>Permission to configure auto deletion of consumer group for minor version number</p>
 * @method boolean getAllowModifyTxnIdExpiration() Obtain <p>Allow the modification of transaction ID expiration time configuration</p>
 * @method void setAllowModifyTxnIdExpiration(boolean $AllowModifyTxnIdExpiration) Set <p>Allow the modification of transaction ID expiration time configuration</p>
 */
class InstanceVersion extends AbstractModel
{
    /**
     * @var string <p>ckafka cluster instance version</p>
     */
    public $KafkaVersion;

    /**
     * @var string <p>broker version info</p>
     */
    public $CurBrokerVersion;

    /**
     * @var array <p>latest version info</p>
     */
    public $LatestBrokerVersion;

    /**
     * @var boolean <p>Permission for cross-major version kernel upgrade</p>
     */
    public $AllowUpgradeHighVersion;

    /**
     * @var array <p>Permission for major version upgrade</p>
     */
    public $HighVersionSet;

    /**
     * @var boolean <p>Permission to configure auto deletion of consumer group for minor version number</p>
     */
    public $AllowAutoDeleteTimestamp;

    /**
     * @var boolean <p>Allow the modification of transaction ID expiration time configuration</p>
     */
    public $AllowModifyTxnIdExpiration;

    /**
     * @param string $KafkaVersion <p>ckafka cluster instance version</p>
     * @param string $CurBrokerVersion <p>broker version info</p>
     * @param array $LatestBrokerVersion <p>latest version info</p>
     * @param boolean $AllowUpgradeHighVersion <p>Permission for cross-major version kernel upgrade</p>
     * @param array $HighVersionSet <p>Permission for major version upgrade</p>
     * @param boolean $AllowAutoDeleteTimestamp <p>Permission to configure auto deletion of consumer group for minor version number</p>
     * @param boolean $AllowModifyTxnIdExpiration <p>Allow the modification of transaction ID expiration time configuration</p>
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

        if (array_key_exists("AllowModifyTxnIdExpiration",$param) and $param["AllowModifyTxnIdExpiration"] !== null) {
            $this->AllowModifyTxnIdExpiration = $param["AllowModifyTxnIdExpiration"];
        }
    }
}
