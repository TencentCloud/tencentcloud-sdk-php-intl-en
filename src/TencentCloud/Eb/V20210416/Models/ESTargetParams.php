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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ES rule targets
 *
 * @method string getNetMode() Obtain Network connection type
 * @method void setNetMode(string $NetMode) Set Network connection type
 * @method string getIndexPrefix() Obtain Index prefix
 * @method void setIndexPrefix(string $IndexPrefix) Set Index prefix
 * @method string getRotationInterval() Obtain ES log rotation interval
 * @method void setRotationInterval(string $RotationInterval) Set ES log rotation interval
 * @method string getOutputMode() Obtain DTS event configuration
 * @method void setOutputMode(string $OutputMode) Set DTS event configuration
 * @method string getIndexSuffixMode() Obtain DTS indexing configuration
 * @method void setIndexSuffixMode(string $IndexSuffixMode) Set DTS indexing configuration
 * @method string getIndexTemplateType() Obtain ES template type
 * @method void setIndexTemplateType(string $IndexTemplateType) Set ES template type
 */
class ESTargetParams extends AbstractModel
{
    /**
     * @var string Network connection type
     */
    public $NetMode;

    /**
     * @var string Index prefix
     */
    public $IndexPrefix;

    /**
     * @var string ES log rotation interval
     */
    public $RotationInterval;

    /**
     * @var string DTS event configuration
     */
    public $OutputMode;

    /**
     * @var string DTS indexing configuration
     */
    public $IndexSuffixMode;

    /**
     * @var string ES template type
     */
    public $IndexTemplateType;

    /**
     * @param string $NetMode Network connection type
     * @param string $IndexPrefix Index prefix
     * @param string $RotationInterval ES log rotation interval
     * @param string $OutputMode DTS event configuration
     * @param string $IndexSuffixMode DTS indexing configuration
     * @param string $IndexTemplateType ES template type
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
        if (array_key_exists("NetMode",$param) and $param["NetMode"] !== null) {
            $this->NetMode = $param["NetMode"];
        }

        if (array_key_exists("IndexPrefix",$param) and $param["IndexPrefix"] !== null) {
            $this->IndexPrefix = $param["IndexPrefix"];
        }

        if (array_key_exists("RotationInterval",$param) and $param["RotationInterval"] !== null) {
            $this->RotationInterval = $param["RotationInterval"];
        }

        if (array_key_exists("OutputMode",$param) and $param["OutputMode"] !== null) {
            $this->OutputMode = $param["OutputMode"];
        }

        if (array_key_exists("IndexSuffixMode",$param) and $param["IndexSuffixMode"] !== null) {
            $this->IndexSuffixMode = $param["IndexSuffixMode"];
        }

        if (array_key_exists("IndexTemplateType",$param) and $param["IndexTemplateType"] !== null) {
            $this->IndexTemplateType = $param["IndexTemplateType"];
        }
    }
}
