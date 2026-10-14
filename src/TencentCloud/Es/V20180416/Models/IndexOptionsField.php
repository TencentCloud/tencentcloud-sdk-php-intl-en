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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Index autonomous field
 *
 * @method string getExpireMaxAge() Obtain <p>Expiration time.</p>
 * @method void setExpireMaxAge(string $ExpireMaxAge) Set <p>Expiration time.</p>
 * @method string getExpireMaxSize() Obtain <p>Expiration size</p>
 * @method void setExpireMaxSize(string $ExpireMaxSize) Set <p>Expiration size</p>
 * @method string getRolloverMaxAge() Obtain <p>Rollover period</p>
 * @method void setRolloverMaxAge(string $RolloverMaxAge) Set <p>Rollover period</p>
 * @method string getRolloverDynamic() Obtain <p>Whether to enable dynamic scrolling</p>
 * @method void setRolloverDynamic(string $RolloverDynamic) Set <p>Whether to enable dynamic scrolling</p>
 * @method string getShardNumDynamic() Obtain <p>Whether to enable dynamic sharding</p>
 * @method void setShardNumDynamic(string $ShardNumDynamic) Set <p>Whether to enable dynamic sharding</p>
 * @method string getTimestampField() Obtain <p>Time partition field</p>
 * @method void setTimestampField(string $TimestampField) Set <p>Time partition field</p>
 * @method string getWriteMode() Obtain <p>Write mode</p>
 * @method void setWriteMode(string $WriteMode) Set <p>Write mode</p>
 * @method string getFullOffloadedEnable() Obtain <p>Whether to enable complete uninstallation</p><p>Enumeration values:</p><ul><li>true: enable complete uninstallation</li><li>false: disable complete uninstallation</li></ul>
 * @method void setFullOffloadedEnable(string $FullOffloadedEnable) Set <p>Whether to enable complete uninstallation</p><p>Enumeration values:</p><ul><li>true: enable complete uninstallation</li><li>false: disable complete uninstallation</li></ul>
 * @method string getFullOffloadedMaxAge() Obtain <p>Full uninstall lifecycle</p>
 * @method void setFullOffloadedMaxAge(string $FullOffloadedMaxAge) Set <p>Full uninstall lifecycle</p>
 * @method string getFullOffloadedRetrieveMaxAge() Obtain <p>Completely uninstall the lifecycle after backup index retrieval</p>
 * @method void setFullOffloadedRetrieveMaxAge(string $FullOffloadedRetrieveMaxAge) Set <p>Completely uninstall the lifecycle after backup index retrieval</p>
 */
class IndexOptionsField extends AbstractModel
{
    /**
     * @var string <p>Expiration time.</p>
     */
    public $ExpireMaxAge;

    /**
     * @var string <p>Expiration size</p>
     */
    public $ExpireMaxSize;

    /**
     * @var string <p>Rollover period</p>
     */
    public $RolloverMaxAge;

    /**
     * @var string <p>Whether to enable dynamic scrolling</p>
     */
    public $RolloverDynamic;

    /**
     * @var string <p>Whether to enable dynamic sharding</p>
     */
    public $ShardNumDynamic;

    /**
     * @var string <p>Time partition field</p>
     */
    public $TimestampField;

    /**
     * @var string <p>Write mode</p>
     */
    public $WriteMode;

    /**
     * @var string <p>Whether to enable complete uninstallation</p><p>Enumeration values:</p><ul><li>true: enable complete uninstallation</li><li>false: disable complete uninstallation</li></ul>
     */
    public $FullOffloadedEnable;

    /**
     * @var string <p>Full uninstall lifecycle</p>
     */
    public $FullOffloadedMaxAge;

    /**
     * @var string <p>Completely uninstall the lifecycle after backup index retrieval</p>
     */
    public $FullOffloadedRetrieveMaxAge;

    /**
     * @param string $ExpireMaxAge <p>Expiration time.</p>
     * @param string $ExpireMaxSize <p>Expiration size</p>
     * @param string $RolloverMaxAge <p>Rollover period</p>
     * @param string $RolloverDynamic <p>Whether to enable dynamic scrolling</p>
     * @param string $ShardNumDynamic <p>Whether to enable dynamic sharding</p>
     * @param string $TimestampField <p>Time partition field</p>
     * @param string $WriteMode <p>Write mode</p>
     * @param string $FullOffloadedEnable <p>Whether to enable complete uninstallation</p><p>Enumeration values:</p><ul><li>true: enable complete uninstallation</li><li>false: disable complete uninstallation</li></ul>
     * @param string $FullOffloadedMaxAge <p>Full uninstall lifecycle</p>
     * @param string $FullOffloadedRetrieveMaxAge <p>Completely uninstall the lifecycle after backup index retrieval</p>
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
        if (array_key_exists("ExpireMaxAge",$param) and $param["ExpireMaxAge"] !== null) {
            $this->ExpireMaxAge = $param["ExpireMaxAge"];
        }

        if (array_key_exists("ExpireMaxSize",$param) and $param["ExpireMaxSize"] !== null) {
            $this->ExpireMaxSize = $param["ExpireMaxSize"];
        }

        if (array_key_exists("RolloverMaxAge",$param) and $param["RolloverMaxAge"] !== null) {
            $this->RolloverMaxAge = $param["RolloverMaxAge"];
        }

        if (array_key_exists("RolloverDynamic",$param) and $param["RolloverDynamic"] !== null) {
            $this->RolloverDynamic = $param["RolloverDynamic"];
        }

        if (array_key_exists("ShardNumDynamic",$param) and $param["ShardNumDynamic"] !== null) {
            $this->ShardNumDynamic = $param["ShardNumDynamic"];
        }

        if (array_key_exists("TimestampField",$param) and $param["TimestampField"] !== null) {
            $this->TimestampField = $param["TimestampField"];
        }

        if (array_key_exists("WriteMode",$param) and $param["WriteMode"] !== null) {
            $this->WriteMode = $param["WriteMode"];
        }

        if (array_key_exists("FullOffloadedEnable",$param) and $param["FullOffloadedEnable"] !== null) {
            $this->FullOffloadedEnable = $param["FullOffloadedEnable"];
        }

        if (array_key_exists("FullOffloadedMaxAge",$param) and $param["FullOffloadedMaxAge"] !== null) {
            $this->FullOffloadedMaxAge = $param["FullOffloadedMaxAge"];
        }

        if (array_key_exists("FullOffloadedRetrieveMaxAge",$param) and $param["FullOffloadedRetrieveMaxAge"] !== null) {
            $this->FullOffloadedRetrieveMaxAge = $param["FullOffloadedRetrieveMaxAge"];
        }
    }
}
