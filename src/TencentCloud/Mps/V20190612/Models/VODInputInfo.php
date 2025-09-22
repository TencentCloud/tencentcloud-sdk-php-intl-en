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
 * VOD Pro object information for MPS.
 *
 * @method string getBucket() Obtain Specifies the Bucket ID where the input file resides.
 * @method void setBucket(string $Bucket) Set Specifies the Bucket ID where the input file resides.
 * @method string getRegion() Obtain Specifies the region where the input file's Bucket resides.
 * @method void setRegion(string $Region) Set Specifies the region where the input file's Bucket resides.
 * @method string getObject() Obtain Path of the input file.
 * @method void setObject(string $Object) Set Path of the input file.
 * @method integer getSubAppId() Obtain VOD Pro application Id.
 * @method void setSubAppId(integer $SubAppId) Set VOD Pro application Id.
 */
class VODInputInfo extends AbstractModel
{
    /**
     * @var string Specifies the Bucket ID where the input file resides.
     */
    public $Bucket;

    /**
     * @var string Specifies the region where the input file's Bucket resides.
     */
    public $Region;

    /**
     * @var string Path of the input file.
     */
    public $Object;

    /**
     * @var integer VOD Pro application Id.
     */
    public $SubAppId;

    /**
     * @param string $Bucket Specifies the Bucket ID where the input file resides.
     * @param string $Region Specifies the region where the input file's Bucket resides.
     * @param string $Object Path of the input file.
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

        if (array_key_exists("Object",$param) and $param["Object"] !== null) {
            $this->Object = $param["Object"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
