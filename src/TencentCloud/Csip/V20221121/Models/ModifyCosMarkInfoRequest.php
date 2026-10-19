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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCosMarkInfo request structure.
 *
 * @method array getBucketNameSet() Obtain Bucket list that needs to be modified
 * @method void setBucketNameSet(array $BucketNameSet) Set Bucket list that needs to be modified
 * @method string getMarkInfo() Obtain Remarks
 * @method void setMarkInfo(string $MarkInfo) Set Remarks
 */
class ModifyCosMarkInfoRequest extends AbstractModel
{
    /**
     * @var array Bucket list that needs to be modified
     */
    public $BucketNameSet;

    /**
     * @var string Remarks
     */
    public $MarkInfo;

    /**
     * @param array $BucketNameSet Bucket list that needs to be modified
     * @param string $MarkInfo Remarks
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
        if (array_key_exists("BucketNameSet",$param) and $param["BucketNameSet"] !== null) {
            $this->BucketNameSet = [];
            foreach ($param["BucketNameSet"] as $key => $value){
                $obj = new CosBucketInfo();
                $obj->deserialize($value);
                array_push($this->BucketNameSet, $obj);
            }
        }

        if (array_key_exists("MarkInfo",$param) and $param["MarkInfo"] !== null) {
            $this->MarkInfo = $param["MarkInfo"];
        }
    }
}
