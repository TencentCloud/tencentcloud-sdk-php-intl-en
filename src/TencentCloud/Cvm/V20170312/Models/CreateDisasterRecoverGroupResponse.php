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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getDisasterRecoverGroupId() 获取List of spread placement group IDs.
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) 设置List of spread placement group IDs.
 * @method string getType() 获取Type of the spread placement group. Valid values: <br><li>HOST: physical machine <br><li>SW: switch <br><li>RACK: rack.
 * @method void setType(string $Type) 设置Type of the spread placement group. Valid values: <br><li>HOST: physical machine <br><li>SW: switch <br><li>RACK: rack.
 * @method string getName() 获取Name of the spread placement group. The name must be 1-60 characters long and can contain both Chinese characters and English letters.
 * @method void setName(string $Name) 设置Name of the spread placement group. The name must be 1-60 characters long and can contain both Chinese characters and English letters.
 * @method integer getCvmQuotaTotal() 获取The maximum number of CVMs in a placement group.
 * @method void setCvmQuotaTotal(integer $CvmQuotaTotal) 设置The maximum number of CVMs in a placement group.
 * @method integer getCurrentNum() 获取The current number of CVMs in a placement group.
 * @method void setCurrentNum(integer $CurrentNum) 设置The current number of CVMs in a placement group.
 * @method string getCreateTime() 获取Creation time of the placement group.
 * @method void setCreateTime(string $CreateTime) 设置Creation time of the placement group.
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *CreateDisasterRecoverGroup response structure.
 */
class CreateDisasterRecoverGroupResponse extends AbstractModel
{
    /**
     * @var string List of spread placement group IDs.
     */
    public $DisasterRecoverGroupId;

    /**
     * @var string Type of the spread placement group. Valid values: <br><li>HOST: physical machine <br><li>SW: switch <br><li>RACK: rack.
     */
    public $Type;

    /**
     * @var string Name of the spread placement group. The name must be 1-60 characters long and can contain both Chinese characters and English letters.
     */
    public $Name;

    /**
     * @var integer The maximum number of CVMs in a placement group.
     */
    public $CvmQuotaTotal;

    /**
     * @var integer The current number of CVMs in a placement group.
     */
    public $CurrentNum;

    /**
     * @var string Creation time of the placement group.
     */
    public $CreateTime;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param string $DisasterRecoverGroupId List of spread placement group IDs.
     * @param string $Type Type of the spread placement group. Valid values: <br><li>HOST: physical machine <br><li>SW: switch <br><li>RACK: rack.
     * @param string $Name Name of the spread placement group. The name must be 1-60 characters long and can contain both Chinese characters and English letters.
     * @param integer $CvmQuotaTotal The maximum number of CVMs in a placement group.
     * @param integer $CurrentNum The current number of CVMs in a placement group.
     * @param string $CreateTime Creation time of the placement group.
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
        if (array_key_exists("DisasterRecoverGroupId",$param) and $param["DisasterRecoverGroupId"] !== null) {
            $this->DisasterRecoverGroupId = $param["DisasterRecoverGroupId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CvmQuotaTotal",$param) and $param["CvmQuotaTotal"] !== null) {
            $this->CvmQuotaTotal = $param["CvmQuotaTotal"];
        }

        if (array_key_exists("CurrentNum",$param) and $param["CurrentNum"] !== null) {
            $this->CurrentNum = $param["CurrentNum"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
