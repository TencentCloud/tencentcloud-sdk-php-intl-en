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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input rule bound to COS.
 *
 * @method string getBucket() Obtain Name of the COS bucket bound to a workflow, such as `TopRankVideo-125xxx88`.
 * @method void setBucket(string $Bucket) Set Name of the COS bucket bound to a workflow, such as `TopRankVideo-125xxx88`.
 * @method string getRegion() Obtain Region of the COS bucket bound to a workflow, such as `ap-chongiqng`.
 * @method void setRegion(string $Region) Set Region of the COS bucket bound to a workflow, such as `ap-chongiqng`.
 * @method string getDir() Obtain Input path directory bound to a workflow, such as `/movie/201907/`. If this parameter is left empty, the `/` root directory will be used.
 * @method void setDir(string $Dir) Set Input path directory bound to a workflow, such as `/movie/201907/`. If this parameter is left empty, the `/` root directory will be used.
 * @method array getFormats() Obtain Format list of files that can trigger a workflow, such as ["mp4", "flv", "mov"]. If this parameter is left empty, files in all formats can trigger the workflow.
 * @method void setFormats(array $Formats) Set Format list of files that can trigger a workflow, such as ["mp4", "flv", "mov"]. If this parameter is left empty, files in all formats can trigger the workflow.
 */
class CosFileUploadTrigger extends AbstractModel
{
    /**
     * @var string Name of the COS bucket bound to a workflow, such as `TopRankVideo-125xxx88`.
     */
    public $Bucket;

    /**
     * @var string Region of the COS bucket bound to a workflow, such as `ap-chongiqng`.
     */
    public $Region;

    /**
     * @var string Input path directory bound to a workflow, such as `/movie/201907/`. If this parameter is left empty, the `/` root directory will be used.
     */
    public $Dir;

    /**
     * @var array Format list of files that can trigger a workflow, such as ["mp4", "flv", "mov"]. If this parameter is left empty, files in all formats can trigger the workflow.
     */
    public $Formats;

    /**
     * @param string $Bucket Name of the COS bucket bound to a workflow, such as `TopRankVideo-125xxx88`.
     * @param string $Region Region of the COS bucket bound to a workflow, such as `ap-chongiqng`.
     * @param string $Dir Input path directory bound to a workflow, such as `/movie/201907/`. If this parameter is left empty, the `/` root directory will be used.
     * @param array $Formats Format list of files that can trigger a workflow, such as ["mp4", "flv", "mov"]. If this parameter is left empty, files in all formats can trigger the workflow.
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
        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Dir",$param) and $param["Dir"] !== null) {
            $this->Dir = $param["Dir"];
        }

        if (array_key_exists("Formats",$param) and $param["Formats"] !== null) {
            $this->Formats = $param["Formats"];
        }
    }
}
