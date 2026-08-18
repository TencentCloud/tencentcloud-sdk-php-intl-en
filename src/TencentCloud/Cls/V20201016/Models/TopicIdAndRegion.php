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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dashboard topic and region information
 *
 * @method string getTopicId() Obtain Log topic id
 * @method void setTopicId(string $TopicId) Set Log topic id
 * @method integer getRegionId() Obtain The ID of the region where the log topic ID is located.

id, region, abbreviation information follows:
- 1: Guangzhou, ap-guangzhou
- 4: Shanghai, ap-shanghai
-5, Hong Kong (China), ap-hongkong
- 7: Shanghai Finance, ap-shanghai-fsi
-8, Beijing, ap-beijing
- 9, Singapore, ap-singapore
- 11: Shenzhen Finance, ap-shenzhen-fsi
-15, Silicon Valley, na-siliconvalley
-16, Chengdu, ap-chengdu
-17, Frankfurt, eu-frankfurt
- 18, Seoul, ap-seoul
- 19: Chongqing, ap-chongqing
- 22, Virginia, na-ashburn
- 23, Bangkok, ap-bangkok
-25, Tokyo, ap-tokyo
- 33, Nanjing, ap-nanjing
-46, Beijing Finance, ap-beijing-fsi
- 72, Jakarta, ap-jakarta
-74, São Paulo, sa-saopaulo
 * @method void setRegionId(integer $RegionId) Set The ID of the region where the log topic ID is located.

id, region, abbreviation information follows:
- 1: Guangzhou, ap-guangzhou
- 4: Shanghai, ap-shanghai
-5, Hong Kong (China), ap-hongkong
- 7: Shanghai Finance, ap-shanghai-fsi
-8, Beijing, ap-beijing
- 9, Singapore, ap-singapore
- 11: Shenzhen Finance, ap-shenzhen-fsi
-15, Silicon Valley, na-siliconvalley
-16, Chengdu, ap-chengdu
-17, Frankfurt, eu-frankfurt
- 18, Seoul, ap-seoul
- 19: Chongqing, ap-chongqing
- 22, Virginia, na-ashburn
- 23, Bangkok, ap-bangkok
-25, Tokyo, ap-tokyo
- 33, Nanjing, ap-nanjing
-46, Beijing Finance, ap-beijing-fsi
- 72, Jakarta, ap-jakarta
-74, São Paulo, sa-saopaulo
 */
class TopicIdAndRegion extends AbstractModel
{
    /**
     * @var string Log topic id
     */
    public $TopicId;

    /**
     * @var integer The ID of the region where the log topic ID is located.

id, region, abbreviation information follows:
- 1: Guangzhou, ap-guangzhou
- 4: Shanghai, ap-shanghai
-5, Hong Kong (China), ap-hongkong
- 7: Shanghai Finance, ap-shanghai-fsi
-8, Beijing, ap-beijing
- 9, Singapore, ap-singapore
- 11: Shenzhen Finance, ap-shenzhen-fsi
-15, Silicon Valley, na-siliconvalley
-16, Chengdu, ap-chengdu
-17, Frankfurt, eu-frankfurt
- 18, Seoul, ap-seoul
- 19: Chongqing, ap-chongqing
- 22, Virginia, na-ashburn
- 23, Bangkok, ap-bangkok
-25, Tokyo, ap-tokyo
- 33, Nanjing, ap-nanjing
-46, Beijing Finance, ap-beijing-fsi
- 72, Jakarta, ap-jakarta
-74, São Paulo, sa-saopaulo
     */
    public $RegionId;

    /**
     * @param string $TopicId Log topic id
     * @param integer $RegionId The ID of the region where the log topic ID is located.

id, region, abbreviation information follows:
- 1: Guangzhou, ap-guangzhou
- 4: Shanghai, ap-shanghai
-5, Hong Kong (China), ap-hongkong
- 7: Shanghai Finance, ap-shanghai-fsi
-8, Beijing, ap-beijing
- 9, Singapore, ap-singapore
- 11: Shenzhen Finance, ap-shenzhen-fsi
-15, Silicon Valley, na-siliconvalley
-16, Chengdu, ap-chengdu
-17, Frankfurt, eu-frankfurt
- 18, Seoul, ap-seoul
- 19: Chongqing, ap-chongqing
- 22, Virginia, na-ashburn
- 23, Bangkok, ap-bangkok
-25, Tokyo, ap-tokyo
- 33, Nanjing, ap-nanjing
-46, Beijing Finance, ap-beijing-fsi
- 72, Jakarta, ap-jakarta
-74, São Paulo, sa-saopaulo
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
