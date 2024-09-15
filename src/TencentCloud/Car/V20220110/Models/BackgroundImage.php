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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Background image information.
 *
 * @method string getCOSFileId() Obtain ID of the COS file.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCOSFileId(string $COSFileId) Set ID of the COS file.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getURL() Obtain Download URL.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setURL(string $URL) Set Download URL.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.

Note: This field may return null, indicating that no valid values can be obtained.
 */
class BackgroundImage extends AbstractModel
{
    /**
     * @var string ID of the COS file.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $COSFileId;

    /**
     * @var string Download URL.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $URL;

    /**
     * @var string Name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Creation time.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @param string $COSFileId ID of the COS file.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $URL Download URL.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.

Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("COSFileId",$param) and $param["COSFileId"] !== null) {
            $this->COSFileId = $param["COSFileId"];
        }

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
