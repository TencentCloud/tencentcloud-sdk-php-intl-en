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
 * Target in Kong Upstream
 *
 * @method string getHost() Obtain Host
 * @method void setHost(string $Host) Set Host
 * @method integer getPort() Obtain Port.
 * @method void setPort(integer $Port) Set Port.
 * @method integer getWeight() Obtain Weight
 * @method void setWeight(integer $Weight) Set Weight
 * @method string getHealth() Obtain Health status.
 * @method void setHealth(string $Health) Set Health status.
 * @method string getCreatedTime() Obtain Creation time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time.
 * @method string getSource() Obtain Source of the Target
 * @method void setSource(string $Source) Set Source of the Target
 * @method string getCvmInstanceId() Obtain CVM instance ID
 * @method void setCvmInstanceId(string $CvmInstanceId) Set CVM instance ID
 * @method string getCvmInstanceName() Obtain CVM instance name.
 * @method void setCvmInstanceName(string $CvmInstanceName) Set CVM instance name.
 * @method array getTags() Obtain target tag
 * @method void setTags(array $Tags) Set target tag
 */
class KongTarget extends AbstractModel
{
    /**
     * @var string Host
     */
    public $Host;

    /**
     * @var integer Port.
     */
    public $Port;

    /**
     * @var integer Weight
     */
    public $Weight;

    /**
     * @var string Health status.
     */
    public $Health;

    /**
     * @var string Creation time.
     */
    public $CreatedTime;

    /**
     * @var string Source of the Target
     */
    public $Source;

    /**
     * @var string CVM instance ID
     */
    public $CvmInstanceId;

    /**
     * @var string CVM instance name.
     */
    public $CvmInstanceName;

    /**
     * @var array target tag
     */
    public $Tags;

    /**
     * @param string $Host Host
     * @param integer $Port Port.
     * @param integer $Weight Weight
     * @param string $Health Health status.
     * @param string $CreatedTime Creation time.
     * @param string $Source Source of the Target
     * @param string $CvmInstanceId CVM instance ID
     * @param string $CvmInstanceName CVM instance name.
     * @param array $Tags target tag
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Health",$param) and $param["Health"] !== null) {
            $this->Health = $param["Health"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("CvmInstanceId",$param) and $param["CvmInstanceId"] !== null) {
            $this->CvmInstanceId = $param["CvmInstanceId"];
        }

        if (array_key_exists("CvmInstanceName",$param) and $param["CvmInstanceName"] !== null) {
            $this->CvmInstanceName = $param["CvmInstanceName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
