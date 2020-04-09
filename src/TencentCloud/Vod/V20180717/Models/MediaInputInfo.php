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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information, name, and customer ID of the source video to be processed
 *
 * @method string getUrl() Obtain Video URL.
 * @method void setUrl(string $Url) Set Video URL.
 * @method string getName() Obtain Video name.
 * @method void setName(string $Name) Set Video name.
 * @method string getId() Obtain Custom video ID.
 * @method void setId(string $Id) Set Custom video ID.
 */
class MediaInputInfo extends AbstractModel
{
    /**
     * @var string Video URL.
     */
    public $Url;

    /**
     * @var string Video name.
     */
    public $Name;

    /**
     * @var string Custom video ID.
     */
    public $Id;

    /**
     * @param string $Url Video URL.
     * @param string $Name Video name.
     * @param string $Id Custom video ID.
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
