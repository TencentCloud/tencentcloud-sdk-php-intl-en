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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApplication request structure.
 *
 * @method integer getSdkAppId() Obtain SdkAppId of the whiteboard application.
 * @method void setSdkAppId(integer $SdkAppId) Set SdkAppId of the whiteboard application.
 * @method string getAppName() Obtain Application name.
 * @method void setAppName(string $AppName) Set Application name.
 * @method string getSKey() Obtain SKey required for creating an IM application.
 * @method void setSKey(string $SKey) Set SKey required for creating an IM application.
 * @method string getTinyId() Obtain TinyId required for creating an IM application.
 * @method void setTinyId(string $TinyId) Set TinyId required for creating an IM application.
 * @method array getTagList() Obtain List of tags to be bound.
 * @method void setTagList(array $TagList) Set List of tags to be bound.
 */
class CreateApplicationRequest extends AbstractModel
{
    /**
     * @var integer SdkAppId of the whiteboard application.
     */
    public $SdkAppId;

    /**
     * @var string Application name.
     */
    public $AppName;

    /**
     * @var string SKey required for creating an IM application.
     */
    public $SKey;

    /**
     * @var string TinyId required for creating an IM application.
     */
    public $TinyId;

    /**
     * @var array List of tags to be bound.
     */
    public $TagList;

    /**
     * @param integer $SdkAppId SdkAppId of the whiteboard application.
     * @param string $AppName Application name.
     * @param string $SKey SKey required for creating an IM application.
     * @param string $TinyId TinyId required for creating an IM application.
     * @param array $TagList List of tags to be bound.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("SKey",$param) and $param["SKey"] !== null) {
            $this->SKey = $param["SKey"];
        }

        if (array_key_exists("TinyId",$param) and $param["TinyId"] !== null) {
            $this->TinyId = $param["TinyId"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
