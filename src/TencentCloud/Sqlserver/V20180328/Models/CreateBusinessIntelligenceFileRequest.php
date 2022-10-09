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
 * CreateBusinessIntelligenceFile request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getFileURL() Obtain 
 * @method void setFileURL(string $FileURL) Set 
 * @method string getFileType() Obtain File type. Valid values: `FLAT` (flat file as data source), `SSIS` (.ispac SSIS package file)
 * @method void setFileType(string $FileType) Set File type. Valid values: `FLAT` (flat file as data source), `SSIS` (.ispac SSIS package file)
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 */
class CreateBusinessIntelligenceFileRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string 
     */
    public $FileURL;

    /**
     * @var string File type. Valid values: `FLAT` (flat file as data source), `SSIS` (.ispac SSIS package file)
     */
    public $FileType;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @param string $InstanceId Instance ID
     * @param string $FileURL 
     * @param string $FileType File type. Valid values: `FLAT` (flat file as data source), `SSIS` (.ispac SSIS package file)
     * @param string $Remark Remarks
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

        if (array_key_exists("FileURL",$param) and $param["FileURL"] !== null) {
            $this->FileURL = $param["FileURL"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
