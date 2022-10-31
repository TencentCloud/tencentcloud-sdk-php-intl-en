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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bucket information
For more information on Tencent Cloud storage, see https://intl.cloud.tencent.com/document/product/436/44352.?from_cn_redirect=1
 *
 * @method string getBucket() Obtain Name of the COS bucket
 * @method void setBucket(string $Bucket) Set Name of the COS bucket
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getObject() Obtain Object key
 * @method void setObject(string $Object) Set Object key
 */
class BucketInfo extends AbstractModel
{
    /**
     * @var string Name of the COS bucket
     */
    public $Bucket;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string Object key
     */
    public $Object;

    /**
     * @param string $Bucket Name of the COS bucket
     * @param string $Region Region
     * @param string $Object Object key
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
    }
}
