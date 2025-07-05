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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteIncrementalMigrationStrategy request structure.
 *
 * @method integer getSubAppId() Obtain <b>The ID of [VOD Professional Application](http://tencentcloud.com/document/product/266/67977).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The ID of [VOD Professional Application](http://tencentcloud.com/document/product/266/67977).</b>
 * @method string getBucketId() Obtain The bucket ID where the strategy takes effect.
 * @method void setBucketId(string $BucketId) Set The bucket ID where the strategy takes effect.
 * @method string getStrategyId() Obtain The ID of the incremental migration strategy.
 * @method void setStrategyId(string $StrategyId) Set The ID of the incremental migration strategy.
 */
class DeleteIncrementalMigrationStrategyRequest extends AbstractModel
{
    /**
     * @var integer <b>The ID of [VOD Professional Application](http://tencentcloud.com/document/product/266/67977).</b>
     */
    public $SubAppId;

    /**
     * @var string The bucket ID where the strategy takes effect.
     */
    public $BucketId;

    /**
     * @var string The ID of the incremental migration strategy.
     */
    public $StrategyId;

    /**
     * @param integer $SubAppId <b>The ID of [VOD Professional Application](http://tencentcloud.com/document/product/266/67977).</b>
     * @param string $BucketId The bucket ID where the strategy takes effect.
     * @param string $StrategyId The ID of the incremental migration strategy.
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("BucketId",$param) and $param["BucketId"] !== null) {
            $this->BucketId = $param["BucketId"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }
    }
}
