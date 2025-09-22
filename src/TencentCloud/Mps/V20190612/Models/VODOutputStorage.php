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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VOD Pro output object information for MPS.
 *
 * @method string getBucket() Obtain Specifies the destination Bucket ID for the generated output file of MPS.
 * @method void setBucket(string $Bucket) Set Specifies the destination Bucket ID for the generated output file of MPS.
 * @method string getRegion() Obtain Specifies the region of the target Bucket for the output.
 * @method void setRegion(string $Region) Set Specifies the region of the target Bucket for the output.
 * @method integer getSubAppId() Obtain VOD Pro application Id.
 * @method void setSubAppId(integer $SubAppId) Set VOD Pro application Id.
 */
class VODOutputStorage extends AbstractModel
{
    /**
     * @var string Specifies the destination Bucket ID for the generated output file of MPS.
     */
    public $Bucket;

    /**
     * @var string Specifies the region of the target Bucket for the output.
     */
    public $Region;

    /**
     * @var integer VOD Pro application Id.
     */
    public $SubAppId;

    /**
     * @param string $Bucket Specifies the destination Bucket ID for the generated output file of MPS.
     * @param string $Region Specifies the region of the target Bucket for the output.
     * @param integer $SubAppId VOD Pro application Id.
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
