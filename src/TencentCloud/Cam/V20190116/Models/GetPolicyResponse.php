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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getPolicyName() 获取Policy name
Note: This field may return null, indicating that no valid value was found.
 * @method void setPolicyName(string $PolicyName) 设置Policy name
Note: This field may return null, indicating that no valid value was found.
 * @method string getDescription() 获取Policy description
Note: This field may return null, indicating that no valid value was found.
 * @method void setDescription(string $Description) 设置Policy description
Note: This field may return null, indicating that no valid value was found.
 * @method integer getType() 获取1: Custom policy; 2: Preset policy
Note: This field may return null, indicating that no valid value was found.
 * @method void setType(integer $Type) 设置1: Custom policy; 2: Preset policy
Note: This field may return null, indicating that no valid value was found.
 * @method string getAddTime() 获取Time created
Note: This field may return null, indicating that no valid value was found.
 * @method void setAddTime(string $AddTime) 设置Time created
Note: This field may return null, indicating that no valid value was found.
 * @method string getUpdateTime() 获取Time of latest update
Note: This field may return null, indicating that no valid value was found.
 * @method void setUpdateTime(string $UpdateTime) 设置Time of latest update
Note: This field may return null, indicating that no valid value was found.
 * @method string getPolicyDocument() 获取Policy document
Note: This field may return null, indicating that no valid value was found.
 * @method void setPolicyDocument(string $PolicyDocument) 设置Policy document
Note: This field may return null, indicating that no valid value was found.
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *GetPolicy response structure.
 */
class GetPolicyResponse extends AbstractModel
{
    /**
     * @var string Policy name
Note: This field may return null, indicating that no valid value was found.
     */
    public $PolicyName;

    /**
     * @var string Policy description
Note: This field may return null, indicating that no valid value was found.
     */
    public $Description;

    /**
     * @var integer 1: Custom policy; 2: Preset policy
Note: This field may return null, indicating that no valid value was found.
     */
    public $Type;

    /**
     * @var string Time created
Note: This field may return null, indicating that no valid value was found.
     */
    public $AddTime;

    /**
     * @var string Time of latest update
Note: This field may return null, indicating that no valid value was found.
     */
    public $UpdateTime;

    /**
     * @var string Policy document
Note: This field may return null, indicating that no valid value was found.
     */
    public $PolicyDocument;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param string $PolicyName Policy name
Note: This field may return null, indicating that no valid value was found.
     * @param string $Description Policy description
Note: This field may return null, indicating that no valid value was found.
     * @param integer $Type 1: Custom policy; 2: Preset policy
Note: This field may return null, indicating that no valid value was found.
     * @param string $AddTime Time created
Note: This field may return null, indicating that no valid value was found.
     * @param string $UpdateTime Time of latest update
Note: This field may return null, indicating that no valid value was found.
     * @param string $PolicyDocument Policy document
Note: This field may return null, indicating that no valid value was found.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("PolicyDocument",$param) and $param["PolicyDocument"] !== null) {
            $this->PolicyDocument = $param["PolicyDocument"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
