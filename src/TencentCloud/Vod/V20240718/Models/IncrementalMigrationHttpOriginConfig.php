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
 * Configuration of the origin for incremental migration back-to-source.
 *
 * @method IncrementalMigrationHttpOriginInfo getOriginInfo() Obtain Origin information for back-to-source.
 * @method void setOriginInfo(IncrementalMigrationHttpOriginInfo $OriginInfo) Set Origin information for back-to-source.
 * @method IncrementalMigrationHttpOriginParameter getOriginParameter() Obtain Back-to-source parameters.
 * @method void setOriginParameter(IncrementalMigrationHttpOriginParameter $OriginParameter) Set Back-to-source parameters.
 * @method string getMode() Obtain Back-to-source mode. Valid values:
<li>SYNC: Synchronous back-to-source;</li>
<li>ASYNC: Asynchronous back-to-source.</li>
 * @method void setMode(string $Mode) Set Back-to-source mode. Valid values:
<li>SYNC: Synchronous back-to-source;</li>
<li>ASYNC: Asynchronous back-to-source.</li>
 * @method IncrementalMigrationHttpOriginCondition getOriginCondition() Obtain Back-to-source conditions.
 * @method void setOriginCondition(IncrementalMigrationHttpOriginCondition $OriginCondition) Set Back-to-source conditions.
 */
class IncrementalMigrationHttpOriginConfig extends AbstractModel
{
    /**
     * @var IncrementalMigrationHttpOriginInfo Origin information for back-to-source.
     */
    public $OriginInfo;

    /**
     * @var IncrementalMigrationHttpOriginParameter Back-to-source parameters.
     */
    public $OriginParameter;

    /**
     * @var string Back-to-source mode. Valid values:
<li>SYNC: Synchronous back-to-source;</li>
<li>ASYNC: Asynchronous back-to-source.</li>
     */
    public $Mode;

    /**
     * @var IncrementalMigrationHttpOriginCondition Back-to-source conditions.
     */
    public $OriginCondition;

    /**
     * @param IncrementalMigrationHttpOriginInfo $OriginInfo Origin information for back-to-source.
     * @param IncrementalMigrationHttpOriginParameter $OriginParameter Back-to-source parameters.
     * @param string $Mode Back-to-source mode. Valid values:
<li>SYNC: Synchronous back-to-source;</li>
<li>ASYNC: Asynchronous back-to-source.</li>
     * @param IncrementalMigrationHttpOriginCondition $OriginCondition Back-to-source conditions.
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
        if (array_key_exists("OriginInfo",$param) and $param["OriginInfo"] !== null) {
            $this->OriginInfo = new IncrementalMigrationHttpOriginInfo();
            $this->OriginInfo->deserialize($param["OriginInfo"]);
        }

        if (array_key_exists("OriginParameter",$param) and $param["OriginParameter"] !== null) {
            $this->OriginParameter = new IncrementalMigrationHttpOriginParameter();
            $this->OriginParameter->deserialize($param["OriginParameter"]);
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("OriginCondition",$param) and $param["OriginCondition"] !== null) {
            $this->OriginCondition = new IncrementalMigrationHttpOriginCondition();
            $this->OriginCondition->deserialize($param["OriginCondition"]);
        }
    }
}
