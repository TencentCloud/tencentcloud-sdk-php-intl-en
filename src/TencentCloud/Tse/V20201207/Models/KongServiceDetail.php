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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Service details of cloud-native gateway
 *
 * @method string getID() Obtain service ID
 * @method void setID(string $ID) Set service ID
 * @method string getName() Obtain Service name.
 * @method void setName(string $Name) Set Service name.
 * @method string getProtocol() Obtain Backend protocol
 * @method void setProtocol(string $Protocol) Set Backend protocol
 * @method string getPath() Obtain Backend path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPath(string $Path) Set Backend path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTimeout() Obtain Backend delay in milliseconds
 * @method void setTimeout(integer $Timeout) Set Backend delay in milliseconds
 * @method integer getRetries() Obtain Number of retries.
 * @method void setRetries(integer $Retries) Set Number of retries.
 * @method array getTags() Obtain Tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method KongUpstreamInfo getUpstreamInfo() Obtain backend configuration
 * @method void setUpstreamInfo(KongUpstreamInfo $UpstreamInfo) Set backend configuration
 * @method string getUpstreamType() Obtain Backend type
 * @method void setUpstreamType(string $UpstreamType) Set Backend type
 * @method boolean getEditable() Obtain Whether it is editable.
 * @method void setEditable(boolean $Editable) Set Whether it is editable.
 * @method string getCreatedTime() Obtain Creation time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time.
 */
class KongServiceDetail extends AbstractModel
{
    /**
     * @var string service ID
     */
    public $ID;

    /**
     * @var string Service name.
     */
    public $Name;

    /**
     * @var string Backend protocol
     */
    public $Protocol;

    /**
     * @var string Backend path
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Path;

    /**
     * @var integer Backend delay in milliseconds
     */
    public $Timeout;

    /**
     * @var integer Number of retries.
     */
    public $Retries;

    /**
     * @var array Tag.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var KongUpstreamInfo backend configuration
     */
    public $UpstreamInfo;

    /**
     * @var string Backend type
     */
    public $UpstreamType;

    /**
     * @var boolean Whether it is editable.
     */
    public $Editable;

    /**
     * @var string Creation time.
     */
    public $CreatedTime;

    /**
     * @param string $ID service ID
     * @param string $Name Service name.
     * @param string $Protocol Backend protocol
     * @param string $Path Backend path
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Timeout Backend delay in milliseconds
     * @param integer $Retries Number of retries.
     * @param array $Tags Tag.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param KongUpstreamInfo $UpstreamInfo backend configuration
     * @param string $UpstreamType Backend type
     * @param boolean $Editable Whether it is editable.
     * @param string $CreatedTime Creation time.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Retries",$param) and $param["Retries"] !== null) {
            $this->Retries = $param["Retries"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("UpstreamInfo",$param) and $param["UpstreamInfo"] !== null) {
            $this->UpstreamInfo = new KongUpstreamInfo();
            $this->UpstreamInfo->deserialize($param["UpstreamInfo"]);
        }

        if (array_key_exists("UpstreamType",$param) and $param["UpstreamType"] !== null) {
            $this->UpstreamType = $param["UpstreamType"];
        }

        if (array_key_exists("Editable",$param) and $param["Editable"] !== null) {
            $this->Editable = $param["Editable"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
