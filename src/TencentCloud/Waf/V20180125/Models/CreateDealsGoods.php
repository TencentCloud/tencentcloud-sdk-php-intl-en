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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input/Output parameter goods of billing & ordering API
 *
 * @method integer getGoodsNum() Obtain Number of products
 * @method void setGoodsNum(integer $GoodsNum) Set Number of products
 * @method CreateDealsGoodsDetail getGoodsDetail() Obtain Product Detail
 * @method void setGoodsDetail(CreateDealsGoodsDetail $GoodsDetail) Set Product Detail
 * @method integer getGoodsCategoryId() Obtain Order type ID, which is used to uniquely identify a business scene. (There are three scenes in total: new purchase, configuration change, and renewal.)
Advanced Edition: 102375 (new purchase), 102376 (renewal), and 102377 (configuration change)
Enterprise Edition: 102378 (new purchase), 102379 (renewal), and 102380 (configuration change)
Ultimate Edition: 102369 (new purchase), 102370 (renewal), and 102371 (configuration change)
Domain name package: 102372 (new purchase), 102373 (renewal), and 102374 (configuration change)
Business expansion package: 101040 (new purchase), 101041 (renewal), and 101042 (configuration change)

Advanced Edition - CLB: 101198 (new purchase), 101199 (renewal), and 101200 (configuration change)
Enterprise Edition - CLB: 101204 (new purchase), 101205 (renewal), and 101206 (configuration change)
Ultimate Edition - CLB: 101201 (new purchase), 101202 (renewal), and 101203 (configuration change)
Domain name package - CLB: 101207 (new purchase), 101208 (renewal), and 101209 (configuration change)
Business expansion package - CLB: 101210 (new purchase), 101211 (renewal), and 101212 (configuration adjustment)

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGoodsCategoryId(integer $GoodsCategoryId) Set Order type ID, which is used to uniquely identify a business scene. (There are three scenes in total: new purchase, configuration change, and renewal.)
Advanced Edition: 102375 (new purchase), 102376 (renewal), and 102377 (configuration change)
Enterprise Edition: 102378 (new purchase), 102379 (renewal), and 102380 (configuration change)
Ultimate Edition: 102369 (new purchase), 102370 (renewal), and 102371 (configuration change)
Domain name package: 102372 (new purchase), 102373 (renewal), and 102374 (configuration change)
Business expansion package: 101040 (new purchase), 101041 (renewal), and 101042 (configuration change)

Advanced Edition - CLB: 101198 (new purchase), 101199 (renewal), and 101200 (configuration change)
Enterprise Edition - CLB: 101204 (new purchase), 101205 (renewal), and 101206 (configuration change)
Ultimate Edition - CLB: 101201 (new purchase), 101202 (renewal), and 101203 (configuration change)
Domain name package - CLB: 101207 (new purchase), 101208 (renewal), and 101209 (configuration change)
Business expansion package - CLB: 101210 (new purchase), 101211 (renewal), and 101212 (configuration adjustment)

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRegionId() Obtain Region ID for purchasing WAF instance

1 indicates purchasing resources in Chinese mainland.
9 indicates purchasing resources outside Chinese mainland.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionId(integer $RegionId) Set Region ID for purchasing WAF instance

1 indicates purchasing resources in Chinese mainland.
9 indicates purchasing resources outside Chinese mainland.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CreateDealsGoods extends AbstractModel
{
    /**
     * @var integer Number of products
     */
    public $GoodsNum;

    /**
     * @var CreateDealsGoodsDetail Product Detail
     */
    public $GoodsDetail;

    /**
     * @var integer Order type ID, which is used to uniquely identify a business scene. (There are three scenes in total: new purchase, configuration change, and renewal.)
Advanced Edition: 102375 (new purchase), 102376 (renewal), and 102377 (configuration change)
Enterprise Edition: 102378 (new purchase), 102379 (renewal), and 102380 (configuration change)
Ultimate Edition: 102369 (new purchase), 102370 (renewal), and 102371 (configuration change)
Domain name package: 102372 (new purchase), 102373 (renewal), and 102374 (configuration change)
Business expansion package: 101040 (new purchase), 101041 (renewal), and 101042 (configuration change)

Advanced Edition - CLB: 101198 (new purchase), 101199 (renewal), and 101200 (configuration change)
Enterprise Edition - CLB: 101204 (new purchase), 101205 (renewal), and 101206 (configuration change)
Ultimate Edition - CLB: 101201 (new purchase), 101202 (renewal), and 101203 (configuration change)
Domain name package - CLB: 101207 (new purchase), 101208 (renewal), and 101209 (configuration change)
Business expansion package - CLB: 101210 (new purchase), 101211 (renewal), and 101212 (configuration adjustment)

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GoodsCategoryId;

    /**
     * @var integer Region ID for purchasing WAF instance

1 indicates purchasing resources in Chinese mainland.
9 indicates purchasing resources outside Chinese mainland.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionId;

    /**
     * @param integer $GoodsNum Number of products
     * @param CreateDealsGoodsDetail $GoodsDetail Product Detail
     * @param integer $GoodsCategoryId Order type ID, which is used to uniquely identify a business scene. (There are three scenes in total: new purchase, configuration change, and renewal.)
Advanced Edition: 102375 (new purchase), 102376 (renewal), and 102377 (configuration change)
Enterprise Edition: 102378 (new purchase), 102379 (renewal), and 102380 (configuration change)
Ultimate Edition: 102369 (new purchase), 102370 (renewal), and 102371 (configuration change)
Domain name package: 102372 (new purchase), 102373 (renewal), and 102374 (configuration change)
Business expansion package: 101040 (new purchase), 101041 (renewal), and 101042 (configuration change)

Advanced Edition - CLB: 101198 (new purchase), 101199 (renewal), and 101200 (configuration change)
Enterprise Edition - CLB: 101204 (new purchase), 101205 (renewal), and 101206 (configuration change)
Ultimate Edition - CLB: 101201 (new purchase), 101202 (renewal), and 101203 (configuration change)
Domain name package - CLB: 101207 (new purchase), 101208 (renewal), and 101209 (configuration change)
Business expansion package - CLB: 101210 (new purchase), 101211 (renewal), and 101212 (configuration adjustment)

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RegionId Region ID for purchasing WAF instance

1 indicates purchasing resources in Chinese mainland.
9 indicates purchasing resources outside Chinese mainland.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("GoodsDetail",$param) and $param["GoodsDetail"] !== null) {
            $this->GoodsDetail = new CreateDealsGoodsDetail();
            $this->GoodsDetail->deserialize($param["GoodsDetail"]);
        }

        if (array_key_exists("GoodsCategoryId",$param) and $param["GoodsCategoryId"] !== null) {
            $this->GoodsCategoryId = $param["GoodsCategoryId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
