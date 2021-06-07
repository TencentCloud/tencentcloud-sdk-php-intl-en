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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplications request structure.
 *
 * @method string getClusterId() Obtain ID of the cluster whose applications will be queried
 * @method void setClusterId(string $ClusterId) Set ID of the cluster whose applications will be queried
 * @method integer getLimit() Obtain The maximum number of results returned per page
 * @method void setLimit(integer $Limit) Set The maximum number of results returned per page
 * @method integer getOffset() Obtain Pagination offset
 * @method void setOffset(integer $Offset) Set Pagination offset
 * @method integer getCensorStatus() Obtain Application status used as a filter condition
 * @method void setCensorStatus(integer $CensorStatus) Set Application status used as a filter condition
 * @method string getTableGroupId() Obtain Table group ID used as a filter condition
 * @method void setTableGroupId(string $TableGroupId) Set Table group ID used as a filter condition
 * @method string getTableName() Obtain Table name used as a filter condition
 * @method void setTableName(string $TableName) Set Table name used as a filter condition
 * @method string getApplicant() Obtain Applicant UIN used as a filter condition
 * @method void setApplicant(string $Applicant) Set Applicant UIN used as a filter condition
 * @method integer getApplyType() Obtain Application type used as a filter condition
 * @method void setApplyType(integer $ApplyType) Set Application type used as a filter condition
 */
class DescribeApplicationsRequest extends AbstractModel
{
    /**
     * @var string ID of the cluster whose applications will be queried
     */
    public $ClusterId;

    /**
     * @var integer The maximum number of results returned per page
     */
    public $Limit;

    /**
     * @var integer Pagination offset
     */
    public $Offset;

    /**
     * @var integer Application status used as a filter condition
     */
    public $CensorStatus;

    /**
     * @var string Table group ID used as a filter condition
     */
    public $TableGroupId;

    /**
     * @var string Table name used as a filter condition
     */
    public $TableName;

    /**
     * @var string Applicant UIN used as a filter condition
     */
    public $Applicant;

    /**
     * @var integer Application type used as a filter condition
     */
    public $ApplyType;

    /**
     * @param string $ClusterId ID of the cluster whose applications will be queried
     * @param integer $Limit The maximum number of results returned per page
     * @param integer $Offset Pagination offset
     * @param integer $CensorStatus Application status used as a filter condition
     * @param string $TableGroupId Table group ID used as a filter condition
     * @param string $TableName Table name used as a filter condition
     * @param string $Applicant Applicant UIN used as a filter condition
     * @param integer $ApplyType Application type used as a filter condition
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("CensorStatus",$param) and $param["CensorStatus"] !== null) {
            $this->CensorStatus = $param["CensorStatus"];
        }

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Applicant",$param) and $param["Applicant"] !== null) {
            $this->Applicant = $param["Applicant"];
        }

        if (array_key_exists("ApplyType",$param) and $param["ApplyType"] !== null) {
            $this->ApplyType = $param["ApplyType"];
        }
    }
}
