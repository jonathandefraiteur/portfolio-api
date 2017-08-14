<?php

abstract class ContactLinkType extends BasicEnum {
    const Divers = 0;
    /**
     * Facebook, Twitter, Pinterest, ...
     */
    const Network = 1;
    /**
     * GitHub, GitLab, BitBucket, ...
     */
    const CommunityHub = 2;
    /**
     * Tumblr, Blogger, Medium, ...
     */
    const Blog = 3;
    /**
     * Personal website, ...
     */
    const Website = 4;
}