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
 * The information of the output COS object after media processing.
 *
 * @method string getBucket() Obtain The bucket to which the output file of media processing is saved, such as `TopRankVideo-125xxx88`. If this parameter is left empty, the value of the upper layer will be inherited.
 * @method void setBucket(string $Bucket) Set The bucket to which the output file of media processing is saved, such as `TopRankVideo-125xxx88`. If this parameter is left empty, the value of the upper layer will be inherited.
 * @method string getRegion() Obtain The region of the output bucket, such as `ap-chongqing`. If this parameter is left empty, the value of the upper layer will be inherited.
 * @method void setRegion(string $Region) Set The region of the output bucket, such as `ap-chongqing`. If this parameter is left empty, the value of the upper layer will be inherited.
 */
class CosOutputStorage extends AbstractModel
{
    /**
     * @var string The bucket to which the output file of media processing is saved, such as `TopRankVideo-125xxx88`. If this parameter is left empty, the value of the upper layer will be inherited.
     */
    public $Bucket;

    /**
     * @var string The region of the output bucket, such as `ap-chongqing`. If this parameter is left empty, the value of the upper layer will be inherited.
     */
    public $Region;

    /**
     * @param string $Bucket The bucket to which the output file of media processing is saved, such as `TopRankVideo-125xxx88`. If this parameter is left empty, the value of the upper layer will be inherited.
     * @param string $Region The region of the output bucket, such as `ap-chongqing`. If this parameter is left empty, the value of the upper layer will be inherited.
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
    }
}
