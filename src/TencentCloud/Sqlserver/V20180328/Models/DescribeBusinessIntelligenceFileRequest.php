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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBusinessIntelligenceFile request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getFileName() Obtain File name
 * @method void setFileName(string $FileName) Set File name
 * @method array getStatusSet() Obtain Migration task status set. Valid values: `1` (Initialize to be deployed), `2` (Deploying), `3` (Deployment successful), `4` (Deployment failed)
 * @method void setStatusSet(array $StatusSet) Set Migration task status set. Valid values: `1` (Initialize to be deployed), `2` (Deploying), `3` (Deployment successful), `4` (Deployment failed)
 * @method string getFileType() Obtain File type. Valid values: `FLAT` (flat files), `SSIS` (project file for business intelligence service).
 * @method void setFileType(string $FileType) Set File type. Valid values: `FLAT` (flat files), `SSIS` (project file for business intelligence service).
 * @method integer getLimit() Obtain The maximum number of results returned per page. Value range: 1-100.
 * @method void setLimit(integer $Limit) Set The maximum number of results returned per page. Value range: 1-100.
 * @method integer getOffset() Obtain Page number. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Page number. Default value: `0`.
 * @method string getOrderBy() Obtain Sorting field. Valid values: `file_name`, `create_time`, `start_time`.
 * @method void setOrderBy(string $OrderBy) Set Sorting field. Valid values: `file_name`, `create_time`, `start_time`.
 * @method string getOrderByType() Obtain Sorting order: Valid values: `desc`, `asc`.
 * @method void setOrderByType(string $OrderByType) Set Sorting order: Valid values: `desc`, `asc`.
 */
class DescribeBusinessIntelligenceFileRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string File name
     */
    public $FileName;

    /**
     * @var array Migration task status set. Valid values: `1` (Initialize to be deployed), `2` (Deploying), `3` (Deployment successful), `4` (Deployment failed)
     */
    public $StatusSet;

    /**
     * @var string File type. Valid values: `FLAT` (flat files), `SSIS` (project file for business intelligence service).
     */
    public $FileType;

    /**
     * @var integer The maximum number of results returned per page. Value range: 1-100.
     */
    public $Limit;

    /**
     * @var integer Page number. Default value: `0`.
     */
    public $Offset;

    /**
     * @var string Sorting field. Valid values: `file_name`, `create_time`, `start_time`.
     */
    public $OrderBy;

    /**
     * @var string Sorting order: Valid values: `desc`, `asc`.
     */
    public $OrderByType;

    /**
     * @param string $InstanceId Instance ID
     * @param string $FileName File name
     * @param array $StatusSet Migration task status set. Valid values: `1` (Initialize to be deployed), `2` (Deploying), `3` (Deployment successful), `4` (Deployment failed)
     * @param string $FileType File type. Valid values: `FLAT` (flat files), `SSIS` (project file for business intelligence service).
     * @param integer $Limit The maximum number of results returned per page. Value range: 1-100.
     * @param integer $Offset Page number. Default value: `0`.
     * @param string $OrderBy Sorting field. Valid values: `file_name`, `create_time`, `start_time`.
     * @param string $OrderByType Sorting order: Valid values: `desc`, `asc`.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("StatusSet",$param) and $param["StatusSet"] !== null) {
            $this->StatusSet = $param["StatusSet"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
