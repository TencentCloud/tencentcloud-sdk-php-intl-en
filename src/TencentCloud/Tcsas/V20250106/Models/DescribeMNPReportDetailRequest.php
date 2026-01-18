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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMNPReportDetail request structure.
 *
 * @method integer getTimeBegin() Obtain Start time in YYYYMMDD format
 * @method void setTimeBegin(integer $TimeBegin) Set Start time in YYYYMMDD format
 * @method string getMNPId() Obtain Mini program appid
 * @method void setMNPId(string $MNPId) Set Mini program appid
 * @method integer getDataType() Obtain Type: 0 Non-production data, 1 Production data
 * @method void setDataType(integer $DataType) Set Type: 0 Non-production data, 1 Production data
 * @method string getPlatformId() Obtain Tenant ID
 * @method void setPlatformId(string $PlatformId) Set Tenant ID
 * @method integer getPlatform() Obtain 0 All, 2 Android, 3 iOS
 * @method void setPlatform(integer $Platform) Set 0 All, 2 Android, 3 iOS
 * @method integer getTimeEnd() Obtain End time in YYYYMMDD format
 * @method void setTimeEnd(integer $TimeEnd) Set End time in YYYYMMDD format
 */
class DescribeMNPReportDetailRequest extends AbstractModel
{
    /**
     * @var integer Start time in YYYYMMDD format
     */
    public $TimeBegin;

    /**
     * @var string Mini program appid
     */
    public $MNPId;

    /**
     * @var integer Type: 0 Non-production data, 1 Production data
     */
    public $DataType;

    /**
     * @var string Tenant ID
     */
    public $PlatformId;

    /**
     * @var integer 0 All, 2 Android, 3 iOS
     */
    public $Platform;

    /**
     * @var integer End time in YYYYMMDD format
     */
    public $TimeEnd;

    /**
     * @param integer $TimeBegin Start time in YYYYMMDD format
     * @param string $MNPId Mini program appid
     * @param integer $DataType Type: 0 Non-production data, 1 Production data
     * @param string $PlatformId Tenant ID
     * @param integer $Platform 0 All, 2 Android, 3 iOS
     * @param integer $TimeEnd End time in YYYYMMDD format
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
        if (array_key_exists("TimeBegin",$param) and $param["TimeBegin"] !== null) {
            $this->TimeBegin = $param["TimeBegin"];
        }

        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("TimeEnd",$param) and $param["TimeEnd"] !== null) {
            $this->TimeEnd = $param["TimeEnd"];
        }
    }
}
