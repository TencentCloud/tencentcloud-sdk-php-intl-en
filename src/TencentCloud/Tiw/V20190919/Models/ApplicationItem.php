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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Whiteboard application.
 *
 * @method integer getSdkAppId() Obtain SdkAppId of the whiteboard application.
 * @method void setSdkAppId(integer $SdkAppId) Set SdkAppId of the whiteboard application.
 * @method string getAppName() Obtain Application name.
 * @method void setAppName(string $AppName) Set Application name.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method array getTagList() Obtain Tag list.
 * @method void setTagList(array $TagList) Set Tag list.
 */
class ApplicationItem extends AbstractModel
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
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var array Tag list.
     */
    public $TagList;

    /**
     * @param integer $SdkAppId SdkAppId of the whiteboard application.
     * @param string $AppName Application name.
     * @param string $CreateTime Creation time.
     * @param array $TagList Tag list.
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
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
