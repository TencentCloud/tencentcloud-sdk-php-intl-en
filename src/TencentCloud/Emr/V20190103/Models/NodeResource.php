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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specifications management, which includes specifications type descriptions.
 *
 * @method integer getResourceConfigId() Obtain Configuration ID.
 * @method void setResourceConfigId(integer $ResourceConfigId) Set Configuration ID.
 * @method Resource getResource() Obtain Resource
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResource(Resource $Resource) Set Resource
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 * @method string getIsDefault() Obtain Whether default configuration applies, DEFAULT or BACKUP.
 * @method void setIsDefault(string $IsDefault) Set Whether default configuration applies, DEFAULT or BACKUP.
 * @method integer getMaxResourceNum() Obtain Remaining of this type.
 * @method void setMaxResourceNum(integer $MaxResourceNum) Set Remaining of this type.
 * @method array getPrepaidUnderwritePeriods() Obtain Supported committed use duration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrepaidUnderwritePeriods(array $PrepaidUnderwritePeriods) Set Supported committed use duration.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NodeResource extends AbstractModel
{
    /**
     * @var integer Configuration ID.
     */
    public $ResourceConfigId;

    /**
     * @var Resource Resource
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Resource;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @var string Whether default configuration applies, DEFAULT or BACKUP.
     */
    public $IsDefault;

    /**
     * @var integer Remaining of this type.
     */
    public $MaxResourceNum;

    /**
     * @var array Supported committed use duration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrepaidUnderwritePeriods;

    /**
     * @param integer $ResourceConfigId Configuration ID.
     * @param Resource $Resource Resource
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.
     * @param string $UpdateTime Update time.
     * @param string $IsDefault Whether default configuration applies, DEFAULT or BACKUP.
     * @param integer $MaxResourceNum Remaining of this type.
     * @param array $PrepaidUnderwritePeriods Supported committed use duration.
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
        if (array_key_exists("ResourceConfigId",$param) and $param["ResourceConfigId"] !== null) {
            $this->ResourceConfigId = $param["ResourceConfigId"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new Resource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("MaxResourceNum",$param) and $param["MaxResourceNum"] !== null) {
            $this->MaxResourceNum = $param["MaxResourceNum"];
        }

        if (array_key_exists("PrepaidUnderwritePeriods",$param) and $param["PrepaidUnderwritePeriods"] !== null) {
            $this->PrepaidUnderwritePeriods = $param["PrepaidUnderwritePeriods"];
        }
    }
}
