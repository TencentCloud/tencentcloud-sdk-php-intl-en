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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audit information
 *
 * @method string getCreator() Obtain Creator. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreator(string $Creator) Set Creator. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedAt() Obtain Creation Timestamp
 * @method void setCreatedAt(string $CreatedAt) Set Creation Timestamp
 * @method string getLastModifier() Obtain Last modifier. Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLastModifier(string $LastModifier) Set Last modifier. Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLastModifiedAt() Obtain Last modification timestamp
 * @method void setLastModifiedAt(string $LastModifiedAt) Set Last modification timestamp
 * @method string getCreatorName() Obtain Creator name.
 * @method void setCreatorName(string $CreatorName) Set Creator name.
 * @method string getLastModifierName() Obtain Name of the last modifier
 * @method void setLastModifierName(string $LastModifierName) Set Name of the last modifier
 */
class Audit extends AbstractModel
{
    /**
     * @var string Creator. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Creator;

    /**
     * @var string Creation Timestamp
     */
    public $CreatedAt;

    /**
     * @var string Last modifier. Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LastModifier;

    /**
     * @var string Last modification timestamp
     */
    public $LastModifiedAt;

    /**
     * @var string Creator name.
     */
    public $CreatorName;

    /**
     * @var string Name of the last modifier
     */
    public $LastModifierName;

    /**
     * @param string $Creator Creator. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedAt Creation Timestamp
     * @param string $LastModifier Last modifier. Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LastModifiedAt Last modification timestamp
     * @param string $CreatorName Creator name.
     * @param string $LastModifierName Name of the last modifier
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
        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("LastModifier",$param) and $param["LastModifier"] !== null) {
            $this->LastModifier = $param["LastModifier"];
        }

        if (array_key_exists("LastModifiedAt",$param) and $param["LastModifiedAt"] !== null) {
            $this->LastModifiedAt = $param["LastModifiedAt"];
        }

        if (array_key_exists("CreatorName",$param) and $param["CreatorName"] !== null) {
            $this->CreatorName = $param["CreatorName"];
        }

        if (array_key_exists("LastModifierName",$param) and $param["LastModifierName"] !== null) {
            $this->LastModifierName = $param["LastModifierName"];
        }
    }
}
