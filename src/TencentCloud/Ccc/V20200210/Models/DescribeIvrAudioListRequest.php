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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIvrAudioList request structure.
 *
 * @method integer getSdkAppId() Obtain Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method integer getPageSize() Obtain Page size, upper limit 50.
 * @method void setPageSize(integer $PageSize) Set Page size, upper limit 50.
 * @method integer getPageNumber() Obtain Page number starting from 0.
 * @method void setPageNumber(integer $PageNumber) Set Page number starting from 0.
 * @method array getCustomFileName() Obtain File alias.
 * @method void setCustomFileName(array $CustomFileName) Set File alias.
 * @method array getAudioFileName() Obtain Filename.
 * @method void setAudioFileName(array $AudioFileName) Set Filename.
 * @method array getFileId() Obtain File id.
 * @method void setFileId(array $FileId) Set File id.
 */
class DescribeIvrAudioListRequest extends AbstractModel
{
    /**
     * @var integer Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var integer Page size, upper limit 50.
     */
    public $PageSize;

    /**
     * @var integer Page number starting from 0.
     */
    public $PageNumber;

    /**
     * @var array File alias.
     */
    public $CustomFileName;

    /**
     * @var array Filename.
     */
    public $AudioFileName;

    /**
     * @var array File id.
     */
    public $FileId;

    /**
     * @param integer $SdkAppId Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param integer $PageSize Page size, upper limit 50.
     * @param integer $PageNumber Page number starting from 0.
     * @param array $CustomFileName File alias.
     * @param array $AudioFileName Filename.
     * @param array $FileId File id.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("CustomFileName",$param) and $param["CustomFileName"] !== null) {
            $this->CustomFileName = $param["CustomFileName"];
        }

        if (array_key_exists("AudioFileName",$param) and $param["AudioFileName"] !== null) {
            $this->AudioFileName = $param["AudioFileName"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
