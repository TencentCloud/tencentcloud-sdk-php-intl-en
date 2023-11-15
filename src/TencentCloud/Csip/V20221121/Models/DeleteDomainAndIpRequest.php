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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDomainAndIp request structure.
 *
 * @method array getContent() Obtain u200c-
 * @method void setContent(array $Content) Set u200c-
 * @method integer getRetainPath() Obtain Whether to retain the path configuration. `1`: Retain; Others: Do not retain. It defaults to do not retain if not specified.
 * @method void setRetainPath(integer $RetainPath) Set Whether to retain the path configuration. `1`: Retain; Others: Do not retain. It defaults to do not retain if not specified.
 * @method integer getIgnoreAsset() Obtain Whether to ignore this asset in the future. `1`: Ignore; Others: Do not ignore. It defaults to ignore if not specified.
 * @method void setIgnoreAsset(integer $IgnoreAsset) Set Whether to ignore this asset in the future. `1`: Ignore; Others: Do not ignore. It defaults to ignore if not specified.
 * @method array getTags() Obtain Asset tags
 * @method void setTags(array $Tags) Set Asset tags
 * @method string getType() Obtain Deletion mode. Values: `ALL` (delete all). If it's not specified, `Content` is required.
 * @method void setType(string $Type) Set Deletion mode. Values: `ALL` (delete all). If it's not specified, `Content` is required.
 */
class DeleteDomainAndIpRequest extends AbstractModel
{
    /**
     * @var array u200c-
     */
    public $Content;

    /**
     * @var integer Whether to retain the path configuration. `1`: Retain; Others: Do not retain. It defaults to do not retain if not specified.
     */
    public $RetainPath;

    /**
     * @var integer Whether to ignore this asset in the future. `1`: Ignore; Others: Do not ignore. It defaults to ignore if not specified.
     */
    public $IgnoreAsset;

    /**
     * @var array Asset tags
     */
    public $Tags;

    /**
     * @var string Deletion mode. Values: `ALL` (delete all). If it's not specified, `Content` is required.
     */
    public $Type;

    /**
     * @param array $Content u200c-
     * @param integer $RetainPath Whether to retain the path configuration. `1`: Retain; Others: Do not retain. It defaults to do not retain if not specified.
     * @param integer $IgnoreAsset Whether to ignore this asset in the future. `1`: Ignore; Others: Do not ignore. It defaults to ignore if not specified.
     * @param array $Tags Asset tags
     * @param string $Type Deletion mode. Values: `ALL` (delete all). If it's not specified, `Content` is required.
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = [];
            foreach ($param["Content"] as $key => $value){
                $obj = new PublicIpDomainListKey();
                $obj->deserialize($value);
                array_push($this->Content, $obj);
            }
        }

        if (array_key_exists("RetainPath",$param) and $param["RetainPath"] !== null) {
            $this->RetainPath = $param["RetainPath"];
        }

        if (array_key_exists("IgnoreAsset",$param) and $param["IgnoreAsset"] !== null) {
            $this->IgnoreAsset = $param["IgnoreAsset"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new AssetTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
