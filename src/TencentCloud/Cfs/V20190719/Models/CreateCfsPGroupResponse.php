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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCfsPGroup response structure.
 *
 * @method string getPGroupId() Obtain Permission group ID
 * @method void setPGroupId(string $PGroupId) Set Permission group ID
 * @method string getName() Obtain Permission group name
 * @method void setName(string $Name) Set Permission group name
 * @method string getDescInfo() Obtain Permission group description
 * @method void setDescInfo(string $DescInfo) Set Permission group description
 * @method integer getBindCfsNum() Obtain The number of file systems bound to this permission group
 * @method void setBindCfsNum(integer $BindCfsNum) Set The number of file systems bound to this permission group
 * @method string getCDate() Obtain Permission group creation time
 * @method void setCDate(string $CDate) Set Permission group creation time
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateCfsPGroupResponse extends AbstractModel
{
    /**
     * @var string Permission group ID
     */
    public $PGroupId;

    /**
     * @var string Permission group name
     */
    public $Name;

    /**
     * @var string Permission group description
     */
    public $DescInfo;

    /**
     * @var integer The number of file systems bound to this permission group
     */
    public $BindCfsNum;

    /**
     * @var string Permission group creation time
     */
    public $CDate;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $PGroupId Permission group ID
     * @param string $Name Permission group name
     * @param string $DescInfo Permission group description
     * @param integer $BindCfsNum The number of file systems bound to this permission group
     * @param string $CDate Permission group creation time
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("PGroupId",$param) and $param["PGroupId"] !== null) {
            $this->PGroupId = $param["PGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DescInfo",$param) and $param["DescInfo"] !== null) {
            $this->DescInfo = $param["DescInfo"];
        }

        if (array_key_exists("BindCfsNum",$param) and $param["BindCfsNum"] !== null) {
            $this->BindCfsNum = $param["BindCfsNum"];
        }

        if (array_key_exists("CDate",$param) and $param["CDate"] !== null) {
            $this->CDate = $param["CDate"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
