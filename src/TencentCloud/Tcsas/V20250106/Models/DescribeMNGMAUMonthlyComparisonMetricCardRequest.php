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
 * DescribeMNGMAUMonthlyComparisonMetricCard request structure.
 *
 * @method integer getSourceMonth() Obtain Start time in YYYYMMDD format
 * @method void setSourceMonth(integer $SourceMonth) Set Start time in YYYYMMDD format
 * @method integer getDataType() Obtain Type: 0 Non-production data, 1 Production data 
 * @method void setDataType(integer $DataType) Set Type: 0 Non-production data, 1 Production data 
 * @method string getPlatformId() Obtain Tenant ID
 * @method void setPlatformId(string $PlatformId) Set Tenant ID
 * @method integer getTargetMonth() Obtain End time in YYYYMMDD format
 * @method void setTargetMonth(integer $TargetMonth) Set End time in YYYYMMDD format
 * @method string getApplicationId() Obtain Superapp ID starting with App
 * @method void setApplicationId(string $ApplicationId) Set Superapp ID starting with App
 * @method string getMNPId() Obtain Mini program appid, required. When provided, the query is performed based on the mini program.
 * @method void setMNPId(string $MNPId) Set Mini program appid, required. When provided, the query is performed based on the mini program.
 * @method integer getMNPTeamId() Obtain Mini program team ID, required. When provided, the query is performed based on the mini program team.
 * @method void setMNPTeamId(integer $MNPTeamId) Set Mini program team ID, required. When provided, the query is performed based on the mini program team.
 */
class DescribeMNGMAUMonthlyComparisonMetricCardRequest extends AbstractModel
{
    /**
     * @var integer Start time in YYYYMMDD format
     */
    public $SourceMonth;

    /**
     * @var integer Type: 0 Non-production data, 1 Production data 
     */
    public $DataType;

    /**
     * @var string Tenant ID
     */
    public $PlatformId;

    /**
     * @var integer End time in YYYYMMDD format
     */
    public $TargetMonth;

    /**
     * @var string Superapp ID starting with App
     */
    public $ApplicationId;

    /**
     * @var string Mini program appid, required. When provided, the query is performed based on the mini program.
     */
    public $MNPId;

    /**
     * @var integer Mini program team ID, required. When provided, the query is performed based on the mini program team.
     */
    public $MNPTeamId;

    /**
     * @param integer $SourceMonth Start time in YYYYMMDD format
     * @param integer $DataType Type: 0 Non-production data, 1 Production data 
     * @param string $PlatformId Tenant ID
     * @param integer $TargetMonth End time in YYYYMMDD format
     * @param string $ApplicationId Superapp ID starting with App
     * @param string $MNPId Mini program appid, required. When provided, the query is performed based on the mini program.
     * @param integer $MNPTeamId Mini program team ID, required. When provided, the query is performed based on the mini program team.
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
        if (array_key_exists("SourceMonth",$param) and $param["SourceMonth"] !== null) {
            $this->SourceMonth = $param["SourceMonth"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("TargetMonth",$param) and $param["TargetMonth"] !== null) {
            $this->TargetMonth = $param["TargetMonth"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("MNPTeamId",$param) and $param["MNPTeamId"] !== null) {
            $this->MNPTeamId = $param["MNPTeamId"];
        }
    }
}
