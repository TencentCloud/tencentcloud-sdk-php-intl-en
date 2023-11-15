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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDomainAssets request structure.
 *
 * @method Filter getFilter() Obtain u200c-
 * @method void setFilter(Filter $Filter) Set u200c-
 * @method array getTags() Obtain CSC tags of the asset
 * @method void setTags(array $Tags) Set CSC tags of the asset
 */
class DescribeDomainAssetsRequest extends AbstractModel
{
    /**
     * @var Filter u200c-
     */
    public $Filter;

    /**
     * @var array CSC tags of the asset
     */
    public $Tags;

    /**
     * @param Filter $Filter u200c-
     * @param array $Tags CSC tags of the asset
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
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new AssetTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
