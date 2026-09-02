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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDomainAndIp request structure.
 *
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 * @method array getContent() Obtain Asset
 * @method void setContent(array $Content) Set Asset
 * @method integer getRetainPath() Obtain Whether to retain path configuration. 1: Yes; Other: No. No if not specified by default.
 * @method void setRetainPath(integer $RetainPath) Set Whether to retain path configuration. 1: Yes; Other: No. No if not specified by default.
 * @method integer getIgnoreAsset() Obtain Whether to ignore this asset in the future. 1: Yes; Other: No. No if not specified by default.
 * @method void setIgnoreAsset(integer $IgnoreAsset) Set Whether to ignore this asset in the future. 1: Yes; Other: No. No if not specified by default.
 * @method array getTags() Obtain Asset tag
 * @method void setTags(array $Tags) Set Asset tag
 * @method string getType() Obtain Delete type. ALL: deleting all, which will directly ignore the content of Content; Other value: not all, and Content is required. Other value by default.
 * @method void setType(string $Type) Set Delete type. ALL: deleting all, which will directly ignore the content of Content; Other value: not all, and Content is required. Other value by default.
 */
class DeleteDomainAndIpRequest extends AbstractModel
{
    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @var array Asset
     */
    public $Content;

    /**
     * @var integer Whether to retain path configuration. 1: Yes; Other: No. No if not specified by default.
     */
    public $RetainPath;

    /**
     * @var integer Whether to ignore this asset in the future. 1: Yes; Other: No. No if not specified by default.
     */
    public $IgnoreAsset;

    /**
     * @var array Asset tag
     */
    public $Tags;

    /**
     * @var string Delete type. ALL: deleting all, which will directly ignore the content of Content; Other value: not all, and Content is required. Other value by default.
     */
    public $Type;

    /**
     * @param array $MemberId Group Account Member ID
     * @param array $Content Asset
     * @param integer $RetainPath Whether to retain path configuration. 1: Yes; Other: No. No if not specified by default.
     * @param integer $IgnoreAsset Whether to ignore this asset in the future. 1: Yes; Other: No. No if not specified by default.
     * @param array $Tags Asset tag
     * @param string $Type Delete type. ALL: deleting all, which will directly ignore the content of Content; Other value: not all, and Content is required. Other value by default.
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
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
