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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FastEditMedia request structure.
 *
 * @method array getFileInfos() Obtain 
 * @method void setFileInfos(array $FileInfos) Set 
 * @method string getClipMode() Obtain 
 * @method void setClipMode(string $ClipMode) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 */
class FastEditMediaRequest extends AbstractModel
{
    /**
     * @var array 
     */
    public $FileInfos;

    /**
     * @var string 
     */
    public $ClipMode;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @param array $FileInfos 
     * @param string $ClipMode 
     * @param integer $SubAppId 
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
        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new FastEditMediaFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("ClipMode",$param) and $param["ClipMode"] !== null) {
            $this->ClipMode = $param["ClipMode"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
