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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLibrary request structure.
 *
 * @method string getLibraryId() Obtain Media library ID.
 * @method void setLibraryId(string $LibraryId) Set Media library ID.
 * @method string getName() Obtain Media library name. up to 50 characters. leave empty to keep the current value.
 * @method void setName(string $Name) Set Media library name. up to 50 characters. leave empty to keep the current value.
 * @method string getRemark() Obtain Specifies the remark, up to 250 characters. leave it empty to keep the original value.
 * @method void setRemark(string $Remark) Set Specifies the remark, up to 250 characters. leave it empty to keep the original value.
 * @method LibraryExtension getLibraryExtension() Obtain Media library configuration item. some parameters cannot be changed after creation and only modify passed parameters. if this parameter is not passed, no configuration item will be modified.
 * @method void setLibraryExtension(LibraryExtension $LibraryExtension) Set Media library configuration item. some parameters cannot be changed after creation and only modify passed parameters. if this parameter is not passed, no configuration item will be modified.
 */
class ModifyLibraryRequest extends AbstractModel
{
    /**
     * @var string Media library ID.
     */
    public $LibraryId;

    /**
     * @var string Media library name. up to 50 characters. leave empty to keep the current value.
     */
    public $Name;

    /**
     * @var string Specifies the remark, up to 250 characters. leave it empty to keep the original value.
     */
    public $Remark;

    /**
     * @var LibraryExtension Media library configuration item. some parameters cannot be changed after creation and only modify passed parameters. if this parameter is not passed, no configuration item will be modified.
     */
    public $LibraryExtension;

    /**
     * @param string $LibraryId Media library ID.
     * @param string $Name Media library name. up to 50 characters. leave empty to keep the current value.
     * @param string $Remark Specifies the remark, up to 250 characters. leave it empty to keep the original value.
     * @param LibraryExtension $LibraryExtension Media library configuration item. some parameters cannot be changed after creation and only modify passed parameters. if this parameter is not passed, no configuration item will be modified.
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
        if (array_key_exists("LibraryId",$param) and $param["LibraryId"] !== null) {
            $this->LibraryId = $param["LibraryId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("LibraryExtension",$param) and $param["LibraryExtension"] !== null) {
            $this->LibraryExtension = new LibraryExtension();
            $this->LibraryExtension->deserialize($param["LibraryExtension"]);
        }
    }
}
