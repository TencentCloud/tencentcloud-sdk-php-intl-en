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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Incremental migration strategy information.
 *
 * @method string getStrategyId() Obtain The ID of the incremental migration strategy.
 * @method void setStrategyId(string $StrategyId) Set The ID of the incremental migration strategy.
 * @method string getStrategyName() Obtain The name of the incremental migration strategy.
 * @method void setStrategyName(string $StrategyName) Set The name of the incremental migration strategy.
 * @method integer getSubAppId() Obtain <b>The ID of [VOD Professional Application](http://tencentcloud.com/document/product/266/67977).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The ID of [VOD Professional Application](http://tencentcloud.com/document/product/266/67977).</b>
 * @method string getBucketId() Obtain The bucket ID where the strategy takes effect.
 * @method void setBucketId(string $BucketId) Set The bucket ID where the strategy takes effect.
 * @method string getOriginType() Obtain Source type.
 * @method void setOriginType(string $OriginType) Set Source type.
 * @method IncrementalMigrationHttpOriginConfig getHttpOriginConfig() Obtain Incremental migration HTTP origin source configuration.
 * @method void setHttpOriginConfig(IncrementalMigrationHttpOriginConfig $HttpOriginConfig) Set Incremental migration HTTP origin source configuration.
 */
class IncrementalMigrationStrategyInfo extends AbstractModel
{
    /**
     * @var string The ID of the incremental migration strategy.
     */
    public $StrategyId;

    /**
     * @var string The name of the incremental migration strategy.
     */
    public $StrategyName;

    /**
     * @var integer <b>The ID of [VOD Professional Application](http://tencentcloud.com/document/product/266/67977).</b>
     */
    public $SubAppId;

    /**
     * @var string The bucket ID where the strategy takes effect.
     */
    public $BucketId;

    /**
     * @var string Source type.
     */
    public $OriginType;

    /**
     * @var IncrementalMigrationHttpOriginConfig Incremental migration HTTP origin source configuration.
     */
    public $HttpOriginConfig;

    /**
     * @param string $StrategyId The ID of the incremental migration strategy.
     * @param string $StrategyName The name of the incremental migration strategy.
     * @param integer $SubAppId <b>The ID of [VOD Professional Application](http://tencentcloud.com/document/product/266/67977).</b>
     * @param string $BucketId The bucket ID where the strategy takes effect.
     * @param string $OriginType Source type.
     * @param IncrementalMigrationHttpOriginConfig $HttpOriginConfig Incremental migration HTTP origin source configuration.
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
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("BucketId",$param) and $param["BucketId"] !== null) {
            $this->BucketId = $param["BucketId"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("HttpOriginConfig",$param) and $param["HttpOriginConfig"] !== null) {
            $this->HttpOriginConfig = new IncrementalMigrationHttpOriginConfig();
            $this->HttpOriginConfig->deserialize($param["HttpOriginConfig"]);
        }
    }
}
