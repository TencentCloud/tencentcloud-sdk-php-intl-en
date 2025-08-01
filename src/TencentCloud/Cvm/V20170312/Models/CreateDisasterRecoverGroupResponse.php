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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDisasterRecoverGroup response structure.
 *
 * @method string getDisasterRecoverGroupId() Obtain List of spread placement group IDs.
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) Set List of spread placement group IDs.
 * @method string getType() Obtain Type of a spread placement group. Valid values:<br><li>HOST: physical machine.</li><li>SW: switch.</li><li>RACK: rack.</li>
 * @method void setType(string $Type) Set Type of a spread placement group. Valid values:<br><li>HOST: physical machine.</li><li>SW: switch.</li><li>RACK: rack.</li>
 * @method string getName() Obtain Name of the spread placement group. The name must be 1-60 characters long and can contain both Chinese characters and English letters.
 * @method void setName(string $Name) Set Name of the spread placement group. The name must be 1-60 characters long and can contain both Chinese characters and English letters.
 * @method integer getCvmQuotaTotal() Obtain The maximum number of CVMs in a placement group.
 * @method void setCvmQuotaTotal(integer $CvmQuotaTotal) Set The maximum number of CVMs in a placement group.
 * @method integer getCurrentNum() Obtain The current number of CVMs in a placement group.
 * @method void setCurrentNum(integer $CurrentNum) Set The current number of CVMs in a placement group.
 * @method string getCreateTime() Obtain Creation time of the placement group.
 * @method void setCreateTime(string $CreateTime) Set Creation time of the placement group.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class CreateDisasterRecoverGroupResponse extends AbstractModel
{
    /**
     * @var string List of spread placement group IDs.
     */
    public $DisasterRecoverGroupId;

    /**
     * @var string Type of a spread placement group. Valid values:<br><li>HOST: physical machine.</li><li>SW: switch.</li><li>RACK: rack.</li>
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
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $DisasterRecoverGroupId List of spread placement group IDs.
     * @param string $Type Type of a spread placement group. Valid values:<br><li>HOST: physical machine.</li><li>SW: switch.</li><li>RACK: rack.</li>
     * @param string $Name Name of the spread placement group. The name must be 1-60 characters long and can contain both Chinese characters and English letters.
     * @param integer $CvmQuotaTotal The maximum number of CVMs in a placement group.
     * @param integer $CurrentNum The current number of CVMs in a placement group.
     * @param string $CreateTime Creation time of the placement group.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
