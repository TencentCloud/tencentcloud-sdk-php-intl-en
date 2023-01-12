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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic information of the namespace
 *
 * @method string getEnvironmentId() Obtain ID
 * @method void setEnvironmentId(string $EnvironmentId) Set ID
 * @method string getNamespaceName() Obtain (Disused) Name
 * @method void setNamespaceName(string $NamespaceName) Set (Disused) Name
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getVpcId() Obtain vpc id
 * @method void setVpcId(string $VpcId) Set vpc id
 * @method array getSubnetIds() Obtain Array of subnet IDs
 * @method void setSubnetIds(array $SubnetIds) Set Array of subnet IDs
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method string getCreatedDate() Obtain Creation time
 * @method void setCreatedDate(string $CreatedDate) Set Creation time
 * @method string getEnvironmentName() Obtain Environment name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnvironmentName(string $EnvironmentName) Set Environment name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApmInstanceId() Obtain APM instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApmInstanceId(string $ApmInstanceId) Set APM instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLocked() Obtain Whether the environment is locked. `1`: Locked, `0`: Not locked
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocked(integer $Locked) Set Whether the environment is locked. `1`: Locked, `0`: Not locked
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTags(array $Tags) Set Tag
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getEnvType() Obtain Environment type. Values: `test`, `pre`, `prod`
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setEnvType(string $EnvType) Set Environment type. Values: `test`, `pre`, `prod`
Note: This field may return `null`, indicating that no valid value was found.
 */
class NamespaceInfo extends AbstractModel
{
    /**
     * @var string ID
     */
    public $EnvironmentId;

    /**
     * @var string (Disused) Name
     */
    public $NamespaceName;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string vpc id
     */
    public $VpcId;

    /**
     * @var array Array of subnet IDs
     */
    public $SubnetIds;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var string Creation time
     */
    public $CreatedDate;

    /**
     * @var string Environment name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnvironmentName;

    /**
     * @var string APM instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApmInstanceId;

    /**
     * @var integer Whether the environment is locked. `1`: Locked, `0`: Not locked
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Locked;

    /**
     * @var array Tag
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Tags;

    /**
     * @var string Environment type. Values: `test`, `pre`, `prod`
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $EnvType;

    /**
     * @param string $EnvironmentId ID
     * @param string $NamespaceName (Disused) Name
     * @param string $Region Region
     * @param string $VpcId vpc id
     * @param array $SubnetIds Array of subnet IDs
     * @param string $Description Description
     * @param string $CreatedDate Creation time
     * @param string $EnvironmentName Environment name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApmInstanceId APM instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Locked Whether the environment is locked. `1`: Locked, `0`: Not locked
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $EnvType Environment type. Values: `test`, `pre`, `prod`
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedDate",$param) and $param["CreatedDate"] !== null) {
            $this->CreatedDate = $param["CreatedDate"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("ApmInstanceId",$param) and $param["ApmInstanceId"] !== null) {
            $this->ApmInstanceId = $param["ApmInstanceId"];
        }

        if (array_key_exists("Locked",$param) and $param["Locked"] !== null) {
            $this->Locked = $param["Locked"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }
    }
}
