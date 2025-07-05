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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Chat details Refer.
 *
 * @method string getId() Obtain ID
 * @method void setId(string $Id) Set ID
 * @method string getUrl() Obtain URL.
 * @method void setUrl(string $Url) Set URL.
 * @method integer getType() Obtain Type.
 * @method void setType(integer $Type) Set Type.
 * @method string getName() Obtain Name.
 * @method void setName(string $Name) Set Name.
 * @method string getDocId() Obtain Source document ID.
 * @method void setDocId(string $DocId) Set Source document ID.
 */
class MsgRecordReference extends AbstractModel
{
    /**
     * @var string ID
     */
    public $Id;

    /**
     * @var string URL.
     */
    public $Url;

    /**
     * @var integer Type.
     */
    public $Type;

    /**
     * @var string Name.
     */
    public $Name;

    /**
     * @var string Source document ID.
     */
    public $DocId;

    /**
     * @param string $Id ID
     * @param string $Url URL.
     * @param integer $Type Type.
     * @param string $Name Name.
     * @param string $DocId Source document ID.
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }
    }
}
