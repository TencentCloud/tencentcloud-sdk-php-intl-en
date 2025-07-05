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
 * Incremental migration of origin file information.
 *
 * @method IncrementalMigrationOriginPrefixConfig getPrefixConfig() Obtain File prefix configuration.
 * @method void setPrefixConfig(IncrementalMigrationOriginPrefixConfig $PrefixConfig) Set File prefix configuration.
 * @method IncrementalMigrationOriginSuffixConfig getSuffixConfig() Obtain File 	suffix configuration.
 * @method void setSuffixConfig(IncrementalMigrationOriginSuffixConfig $SuffixConfig) Set File 	suffix configuration.
 * @method IncrementalMigrationOriginFixedFileConfig getFixedFileConfig() Obtain Fixed file configuration.
 * @method void setFixedFileConfig(IncrementalMigrationOriginFixedFileConfig $FixedFileConfig) Set Fixed file configuration.
 */
class IncrementalMigrationOriginFileInfo extends AbstractModel
{
    /**
     * @var IncrementalMigrationOriginPrefixConfig File prefix configuration.
     */
    public $PrefixConfig;

    /**
     * @var IncrementalMigrationOriginSuffixConfig File 	suffix configuration.
     */
    public $SuffixConfig;

    /**
     * @var IncrementalMigrationOriginFixedFileConfig Fixed file configuration.
     */
    public $FixedFileConfig;

    /**
     * @param IncrementalMigrationOriginPrefixConfig $PrefixConfig File prefix configuration.
     * @param IncrementalMigrationOriginSuffixConfig $SuffixConfig File 	suffix configuration.
     * @param IncrementalMigrationOriginFixedFileConfig $FixedFileConfig Fixed file configuration.
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
        if (array_key_exists("PrefixConfig",$param) and $param["PrefixConfig"] !== null) {
            $this->PrefixConfig = new IncrementalMigrationOriginPrefixConfig();
            $this->PrefixConfig->deserialize($param["PrefixConfig"]);
        }

        if (array_key_exists("SuffixConfig",$param) and $param["SuffixConfig"] !== null) {
            $this->SuffixConfig = new IncrementalMigrationOriginSuffixConfig();
            $this->SuffixConfig->deserialize($param["SuffixConfig"]);
        }

        if (array_key_exists("FixedFileConfig",$param) and $param["FixedFileConfig"] !== null) {
            $this->FixedFileConfig = new IncrementalMigrationOriginFixedFileConfig();
            $this->FixedFileConfig->deserialize($param["FixedFileConfig"]);
        }
    }
}
