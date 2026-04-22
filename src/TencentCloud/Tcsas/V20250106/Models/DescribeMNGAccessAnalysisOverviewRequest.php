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
 * DescribeMNGAccessAnalysisOverview request structure.
 *
 * @method integer getTimeBegin() Obtain Start time
 * @method void setTimeBegin(integer $TimeBegin) Set Start time
 * @method string getMNPId() Obtain Mini program appid
 * @method void setMNPId(string $MNPId) Set Mini program appid
 * @method string getPlatformId() Obtain Tenant ID
 * @method void setPlatformId(string $PlatformId) Set Tenant ID
 * @method integer getTimeEnd() Obtain End time
 * @method void setTimeEnd(integer $TimeEnd) Set End time
 * @method integer getProdData() Obtain 1 Production data, 0 Non-production data
 * @method void setProdData(integer $ProdData) Set 1 Production data, 0 Non-production data
 * @method integer getPlatform() Obtain Operating system: 0 All, 2-Android, 3 iOS
 * @method void setPlatform(integer $Platform) Set Operating system: 0 All, 2-Android, 3 iOS
 */
class DescribeMNGAccessAnalysisOverviewRequest extends AbstractModel
{
    /**
     * @var integer Start time
     */
    public $TimeBegin;

    /**
     * @var string Mini program appid
     */
    public $MNPId;

    /**
     * @var string Tenant ID
     */
    public $PlatformId;

    /**
     * @var integer End time
     */
    public $TimeEnd;

    /**
     * @var integer 1 Production data, 0 Non-production data
     */
    public $ProdData;

    /**
     * @var integer Operating system: 0 All, 2-Android, 3 iOS
     */
    public $Platform;

    /**
     * @param integer $TimeBegin Start time
     * @param string $MNPId Mini program appid
     * @param string $PlatformId Tenant ID
     * @param integer $TimeEnd End time
     * @param integer $ProdData 1 Production data, 0 Non-production data
     * @param integer $Platform Operating system: 0 All, 2-Android, 3 iOS
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

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("TimeEnd",$param) and $param["TimeEnd"] !== null) {
            $this->TimeEnd = $param["TimeEnd"];
        }

        if (array_key_exists("ProdData",$param) and $param["ProdData"] !== null) {
            $this->ProdData = $param["ProdData"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }
    }
}
