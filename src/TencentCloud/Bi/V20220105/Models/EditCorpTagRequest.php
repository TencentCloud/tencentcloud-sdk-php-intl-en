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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EditCorpTag request structure.
 *
 * @method integer getId() Obtain tag ID
 * @method void setId(integer $Id) Set tag ID
 * @method string getName() Obtain Tag name.
 * @method void setName(string $Name) Set Tag name.
 * @method string getImportType() Obtain Import tag mode (manual/auto)
 * @method void setImportType(string $ImportType) Set Import tag mode (manual/auto)
 * @method integer getAutoImportTagTableId() Obtain id of the tag table for automatic import
 * @method void setAutoImportTagTableId(integer $AutoImportTagTableId) Set id of the tag table for automatic import
 * @method string getAutoImportField() Obtain Automatic import of associated tag fields
 * @method void setAutoImportField(string $AutoImportField) Set Automatic import of associated tag fields
 * @method boolean getAsyncRequest() Obtain Whether it is an async request.
 * @method void setAsyncRequest(boolean $AsyncRequest) Set Whether it is an async request.
 * @method string getAutoImportTagTableName() Obtain Name of the tag table for automatic import
 * @method void setAutoImportTagTableName(string $AutoImportTagTableName) Set Name of the tag table for automatic import
 * @method string getTranId() Obtain Transaction ID.
 * @method void setTranId(string $TranId) Set Transaction ID.
 */
class EditCorpTagRequest extends AbstractModel
{
    /**
     * @var integer tag ID
     */
    public $Id;

    /**
     * @var string Tag name.
     */
    public $Name;

    /**
     * @var string Import tag mode (manual/auto)
     */
    public $ImportType;

    /**
     * @var integer id of the tag table for automatic import
     */
    public $AutoImportTagTableId;

    /**
     * @var string Automatic import of associated tag fields
     */
    public $AutoImportField;

    /**
     * @var boolean Whether it is an async request.
     */
    public $AsyncRequest;

    /**
     * @var string Name of the tag table for automatic import
     */
    public $AutoImportTagTableName;

    /**
     * @var string Transaction ID.
     */
    public $TranId;

    /**
     * @param integer $Id tag ID
     * @param string $Name Tag name.
     * @param string $ImportType Import tag mode (manual/auto)
     * @param integer $AutoImportTagTableId id of the tag table for automatic import
     * @param string $AutoImportField Automatic import of associated tag fields
     * @param boolean $AsyncRequest Whether it is an async request.
     * @param string $AutoImportTagTableName Name of the tag table for automatic import
     * @param string $TranId Transaction ID.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ImportType",$param) and $param["ImportType"] !== null) {
            $this->ImportType = $param["ImportType"];
        }

        if (array_key_exists("AutoImportTagTableId",$param) and $param["AutoImportTagTableId"] !== null) {
            $this->AutoImportTagTableId = $param["AutoImportTagTableId"];
        }

        if (array_key_exists("AutoImportField",$param) and $param["AutoImportField"] !== null) {
            $this->AutoImportField = $param["AutoImportField"];
        }

        if (array_key_exists("AsyncRequest",$param) and $param["AsyncRequest"] !== null) {
            $this->AsyncRequest = $param["AsyncRequest"];
        }

        if (array_key_exists("AutoImportTagTableName",$param) and $param["AutoImportTagTableName"] !== null) {
            $this->AutoImportTagTableName = $param["AutoImportTagTableName"];
        }

        if (array_key_exists("TranId",$param) and $param["TranId"] !== null) {
            $this->TranId = $param["TranId"];
        }
    }
}
