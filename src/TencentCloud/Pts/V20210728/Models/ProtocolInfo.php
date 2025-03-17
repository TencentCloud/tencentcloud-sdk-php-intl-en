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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Protocol file information.
 *
 * @method string getName() Obtain Name.

Note: This field may return null, indicating that no valid value is found.
 * @method void setName(string $Name) Set Name.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getSize() Obtain File size.

Note: This field may return null, indicating that no valid value is found.
 * @method void setSize(integer $Size) Set File size.

Note: This field may return null, indicating that no valid value is found.
 * @method string getType() Obtain File type, such as 'proto'.

Note: This field may return null, indicating that no valid value is found.
 * @method void setType(string $Type) Set File type, such as 'proto'.

Note: This field may return null, indicating that no valid value is found.
 * @method string getUpdatedAt() Obtain Update time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setUpdatedAt(string $UpdatedAt) Set Update time.

Note: This field may return null, indicating that no valid value is found.
 * @method string getFileId() Obtain File ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setFileId(string $FileId) Set File ID.

Note: This field may return null, indicating that no valid value is found.
 */
class ProtocolInfo extends AbstractModel
{
    /**
     * @var string Name.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Name;

    /**
     * @var integer File size.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Size;

    /**
     * @var string File type, such as 'proto'.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Type;

    /**
     * @var string Update time.

Note: This field may return null, indicating that no valid value is found.
     */
    public $UpdatedAt;

    /**
     * @var string File ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $FileId;

    /**
     * @param string $Name Name.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $Size File size.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Type File type, such as 'proto'.

Note: This field may return null, indicating that no valid value is found.
     * @param string $UpdatedAt Update time.

Note: This field may return null, indicating that no valid value is found.
     * @param string $FileId File ID.

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
